import './bootstrap';
import 'flowbite'; 

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



const container = document.getElementById('slider-container');
const slides = container.children;
const totalSlides = slides.length;
let currentIndex = 0;

function nextSlide() {
  currentIndex = (currentIndex + 1) % totalSlides;
  container.style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Запуск интервала (смена каждые 3 секунды)
let autoplay = setInterval(nextSlide, 3000);

// Остановка при наведении мыши (опционально)
container.parentElement.addEventListener('mouseenter', () => {
  clearInterval(autoplay);
});

// Возобновление после ухода мыши (опционально)
container.parentElement.addEventListener('mouseleave', () => {
  autoplay = setInterval(nextSlide, 3000);
});
