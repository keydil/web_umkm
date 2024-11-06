<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua produk dari database
        $products = Product::orderBy('id', 'desc')->get();

        // Kirim data produk ke view 'admin.dashboard'
        return view('admin.dashboard', compact('products'));
    }
}

// sebelum ada compact ialah return view('admin.dashboard');