document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper(".hero-slider", {
        loop: true,
        autoplay: { delay: 5000, disableOnInteraction: false },
        speed: 1000,
        pagination: { el: ".swiper-pagination", clickable: true },
        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        on: {
            // Remove animations from previous slide
            slideChangeTransitionStart: function () {
                document.querySelectorAll('.swiper-slide [data-animation]')
                    .forEach(el => el.classList.remove('show'));
            },
            // Animate elements in active slide
            slideChangeTransitionEnd: function () {
                let activeSlide = document.querySelector('.swiper-slide-active');
                activeSlide.querySelectorAll('[data-animation]').forEach((el, index) => {
                    setTimeout(() => {
                        el.classList.add('show');
                    }, index * 400); // staggered delay
                });
            }
        }
    });

    // Initial animation for first slide
    let firstSlideElems = document.querySelector('.swiper-slide-active').querySelectorAll('[data-animation]');
    firstSlideElems.forEach((el, index) => {
        setTimeout(() => {
            el.classList.add('show');
        }, index * 400);
    });
});