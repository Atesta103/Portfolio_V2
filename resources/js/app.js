import './bootstrap';

import Alpine from 'alpinejs';
import './scroll-sections';
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

window.Alpine = Alpine;

Alpine.start();

// Déclaration de la variable swiper à l'extérieur pour y accéder dans tout le script
let swiper;

// Fonction d'initialisation de Swiper
function initSwiper() {
    // Détruire l'instance précédente si elle existe
    if (swiper) {
        swiper.destroy(true, true);
    }
    
// Créer une nouvelle instance
swiper = new Swiper('.swiper', {
    modules: [Navigation, Pagination],
    slidesPerView: 1, // Par défaut, afficher 1 slide
    spaceBetween: 30,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        // Configurations pour différentes tailles d'écran
        640: {
            slidesPerView: 1, // Téléphones
        },
        768: {
            slidesPerView: 2, // Tablettes
        },
        1024: {
            slidesPerView: 3, // Desktop
        }
    }
});
}

// Observer les changements dans Alpine.store pour réinitialiser le swiper
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation au chargement
    initSwiper();
    
    // Observer les changements de isPro
    Alpine.effect(() => {
        // Récupérer la valeur actuelle de isPro
        const isPro = Alpine.store('portfolio').isPro;
        
        // Attendre que le DOM soit mis à jour après le changement de x-show
        setTimeout(() => {
            initSwiper();
        }, 50);
    });
});