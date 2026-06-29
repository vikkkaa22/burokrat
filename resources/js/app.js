import './bootstrap';
import 'flowbite';

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