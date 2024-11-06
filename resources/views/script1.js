const nextButton = document.querySelector('.next1');
const prevButton = document.querySelector('.prev1');

nextButton.addEventListener(
  'click',
  () => {
    const items = document.querySelectorAll('.item1');
    document.querySelector('.slide1').appendChild(items[0]);
  },
);

prevButton.addEventListener(
  'click',
  () => {
    const items = document.querySelectorAll('.item1');
    document.querySelector('.slide1').prepend(items[items.length - 1]);
  },
);
