import Swiper, { Navigation } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('.slider')) {
        const opciones = {
            slidesPerView:1,
            spaceBetween:15,
            freeMode:true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            breakpoints:{
                480: {
                    slidesPerView:1,
                },
                768: {
                    slidesPerView:2,
                },
                1024: {
                    slidesPerView:3,
                },
                1200: {
                    slidesPerView:4,
                }
                
            }
        }
        Swiper.use([Navigation]);
        new Swiper('.slider', opciones);
    }
});