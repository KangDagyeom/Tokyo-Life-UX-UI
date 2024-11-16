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
// Lắng nghe sự kiện click trên toàn bộ trang
function handleCopy(element) {
  // Thay đổi màu nền của thẻ cha
  element.style.backgroundColor = "#c92127";

  // Tìm thẻ <p> bên trong và thay đổi nội dung
  const textElement = element.querySelector("p");
  if (textElement) {
    textElement.textContent = "Đã sao chép";
    textElement.style.color = "#fff"; // Thay đổi màu chữ nếu cần
    
  }
}






