<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view('admin.product.home', compact(['products', 'total']));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function save(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $validation['image'] = $imagePath;
        }
    
        $data = Product::create($validation);
        if ($data) {
            session()->flash('success', 'Product Added Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin.products.create'));
        }
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.update', compact('product'));
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        session()->flash('success', 'Product Deleted Successfully');
        return redirect(route('admin/products'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $validation = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $imagePath = $request->file('image')->store('products', 'public');
            $validation['image'] = $imagePath;
        }
        $product->update($validation);
        session()->flash('success', 'Product Updated Successfully');
        return redirect(route('admin/products'));
    }

    public function downloadPDF()
    {
        $products = Product::all();
        $pdf = Pdf::loadView('admin.product.pdf', compact('products'));
        return $pdf->download('products.pdf');
    }

    public function downloadExcel()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }
}
