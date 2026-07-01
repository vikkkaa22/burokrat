import './bootstrap';
import 'flowbite'; 
import EmblaCarousel from 'embla-carousel'
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



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


document.addEventListener('DOMContentLoaded', () => {
    // Весь блок карусели
    const emblaNode = document.querySelector('#my-carousel');

    if (!emblaNode) return;

    // Viewport (именно его нужно передавать в Embla)
    const viewport = emblaNode.querySelector('.embla__viewport');

    // Инициализация
    const emblaApi = EmblaCarousel(viewport, {
        loop: true,
        align: 'start',
        slidesToScroll: 1,
        containScroll: 'trimSnaps'
    });

    // Верхние кнопки
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            emblaApi.scrollPrev();
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            emblaApi.scrollNext();
        });
    }
});



