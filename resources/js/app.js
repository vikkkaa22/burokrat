import './bootstrap';
import 'flowbite';
import EmblaCarousel from 'embla-carousel';

import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

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