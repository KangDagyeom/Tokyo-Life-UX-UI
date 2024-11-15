var slides = document.getElementsByClassName('slide');
var currentIndex = 0;

function showSlides(params) {


  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[currentIndex].style.display = "block";
}
function next(params) {
  currentIndex++;
  if (currentIndex > slides.length - 1) {
    currentIndex = 0;
  }
  showSlides();

}
function prev(params) {
  currentIndex--;
  if (currentIndex < 0) {
    currentIndex = slides.length - 1;
  }
  showSlides();
}
showSlides();
let slideNext;
function autoSlide() {
  clearInterval(autoSlide);
  slideNext = setInterval(next, 5000);
}
autoSlide();




