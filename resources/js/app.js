import './bootstrap';
<<<<<<< HEAD
import 'flowbite'; 
import EmblaCarousel from 'embla-carousel'
=======
import 'flowbite';
>>>>>>> 76365c5a3a278eadf97ba7515b1a9c5635685036

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


<<<<<<< HEAD
<<<<<<< HEAD
// const wrapperNode = document.querySelector('.embla')
// const viewportNode = wrapperNode.querySelector('.embla__viewport')
// const prevButtonNode = wrapperNode.querySelector('.embla__prev')
// const nextButtonNode = wrapperNode.querySelector('.embla__next')

// const emblaApi = EmblaCarousel(viewportNode, { loop: false })

// prevButtonNode.addEventListener('click', () => emblaApi.goToPrev(), false)
// nextButtonNode.addEventListener('click', () => emblaApi.goToNext(), false)

document.addEventListener('DOMContentLoaded', () => {
    const emblaNode = document.querySelector('#my-carousel');
    if (emblaNode) {
        // Опции по умолчанию
        const options = { loop: true }; 
        const emblaApi = EmblaCarousel(emblaNode, options);

        // Навешивание событий на кнопки (если они есть)
        const prevBtn = emblaNode.querySelector('.embla__prev');
        const nextBtn = emblaNode.querySelector('.embla__next');

        if (prevBtn) prevBtn.addEventListener('click', emblaApi.scrollPrev);
        if (nextBtn) nextBtn.addEventListener('click', emblaApi.scrollNext);
    }
});
=======
=======
document.addEventListener('DOMContentLoaded', (e) => {
    
    if (document.querySelector('.theater')) {
        const theater = document.querySelector('.theater');
        const curtain1 = document.querySelector('.curtain1');
        const curtain2 = document.querySelector('.curtain2');
        const text_show = document.querySelector('.text_show');
    


        theater.addEventListener("click", function () {
            curtain1.classList.add("animate1");
            curtain2.classList.add("animate2");
            text_show.classList.add("animate3");  
        });
    }
    
});

>>>>>>> 76365c5a3a278eadf97ba7515b1a9c5635685036

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
<<<<<<< HEAD
>>>>>>> 714da30458d3ae4937edac671bb425127b43b5e2
=======

>>>>>>> 76365c5a3a278eadf97ba7515b1a9c5635685036
