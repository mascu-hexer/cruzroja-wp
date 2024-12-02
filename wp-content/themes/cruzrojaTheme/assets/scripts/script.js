document.addEventListener('DOMContentLoaded', function() {
    const offset = 65; // Desplazamiento adicional en píxeles

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            if (this.getAttribute('href') === '#') {
                // Permitir que el enlace recargue la página
                return;
            }

            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - offset;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    const SWIP = new Swiper('.swiper', {
        direction: 'horizontal',
        slidesPerView: "auto",
        spaceBetween: 0,
        centeredSlides: false,
        loop: true,
        centeredSlidesBounds: true,
        
        pagination: {
          el: '.swiper-pagination',
        },
        
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

        autoplay: {
            delay: 10000, 
            disableOnInteraction: false,
          },
    });
});