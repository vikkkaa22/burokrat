import './bootstrap';
import 'flowbite'; 
import EmblaCarousel from 'embla-carousel'

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


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