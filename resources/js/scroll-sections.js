document.addEventListener('DOMContentLoaded', function() {
    if (window.location.pathname.includes('/project')) {
        document.body.style.overflow = 'auto'; 
        return; 
    }

    const sections = document.querySelectorAll('.section');
    let currentSection = 0;
    let isScrolling = false;
    const animationDuration = 500; // Augmenter la durée d'animation
    let lastScrollTime = 0;
    const scrollCooldown = 500; // Temps minimum entre chaque défilement (en ms)
    let wheelAccumulator = 0; // Pour accumuler les petits mouvements de la souris/pavé tactile
    const wheelThreshold = 100; // Seuil à atteindre avant de déclencher un défilement

    document.body.style.overflow = 'hidden';

    function scrollToSection(index) {
        if (index < 0 || index >= sections.length || isScrolling) return;
        
        isScrolling = true;
        currentSection = index;

        sections[index].scrollIntoView({ behavior: 'smooth' });

        setTimeout(() => {
            isScrolling = false;
            wheelAccumulator = 0; // Réinitialiser l'accumulateur après un défilement
        }, animationDuration);
        
        lastScrollTime = Date.now();
    }

    window.addEventListener('wheel', function(e) {
        e.preventDefault();
        
        // Vérifier si on est encore dans la période de refroidissement
        const now = Date.now();
        if (isScrolling || now - lastScrollTime < scrollCooldown) return;

        // Accumuler les mouvements de la souris
        wheelAccumulator += Math.abs(e.deltaY);
        
        // Vérifier si le seuil est atteint
        if (wheelAccumulator < wheelThreshold) return;
        
        wheelAccumulator = 0; // Réinitialiser l'accumulateur
        
        if (e.deltaY > 0) {
            scrollToSection(currentSection + 1);
        } else {
            scrollToSection(currentSection - 1);
        }
    }, { passive: false });

    window.addEventListener('keydown', function(e) {
        const now = Date.now();
        if (isScrolling || now - lastScrollTime < scrollCooldown) return;

        if (e.key === 'ArrowDown') {
            e.preventDefault();
            scrollToSection(currentSection + 1);
        } else if (e.key === 'ArrowUp') {
            e.preventDefault();
            scrollToSection(currentSection - 1);
        }
    });

    // Amélioration de la gestion tactile
    let touchStartY = 0;
    let touchStartTime = 0;
    
    window.addEventListener('touchstart', function(e) {
        touchStartY = e.touches[0].clientY;
        touchStartTime = Date.now();
    }, { passive: true });

    window.addEventListener('touchmove', function(e) {
        if (isScrolling) {
            e.preventDefault();
            return;
        }

        const now = Date.now();
        if (now - lastScrollTime < scrollCooldown) return;

        const touchY = e.touches[0].clientY;
        const diff = touchStartY - touchY;
        const timeDiff = now - touchStartTime;

        // S'assurer que le mouvement est assez large et pas trop rapide (pour éviter les petits mouvements accidentels)
        if (Math.abs(diff) > 80 && timeDiff > 100) {
            e.preventDefault();
            if (diff > 0) {
                scrollToSection(currentSection + 1);
            } else {
                scrollToSection(currentSection - 1);
            }
            touchStartY = touchY; // Réinitialiser la position de départ
            touchStartTime = now; // Réinitialiser le temps de départ
        }
    }, { passive: false });

    // Reste du code inchangé...
    document.querySelectorAll('[data-section]').forEach(button => {
        button.addEventListener('click', function() {
            const sectionIndex = parseInt(this.dataset.section);
            scrollToSection(sectionIndex);
        });
    });

    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href').split('#')[1];
            if (!targetId) return;
    
            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                e.preventDefault();
                targetSection.scrollIntoView({ behavior: 'smooth' });
                history.pushState(null, null, `#${targetId}`);
            }
        });
    });
});