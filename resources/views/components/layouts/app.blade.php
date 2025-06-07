<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <title>{{ $title ?? 'Магазин' }}</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    @livewireStyles
</head>
<body class="page">
    <livewire:partials.header />
    <main  class="main" id="main">{{ $slot }}</main>
    <button id="scrollToTopBtn" class="scroll-to-top" title="Наверх">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 4l-8 8h5v8h6v-8h5z"/>
        </svg>
    </button>
    <livewire:partials.footer />
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/imask"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hero = document.querySelector('.hero');
            if (hero) {
                window.addEventListener('scroll', function() {
                    const scrollPosition = window.pageYOffset;
                    hero.style.backgroundPositionY = scrollPosition * 0.5 + 'px';
                });
            }

            const animateOnScroll = function() {
                const elements = document.querySelectorAll('.product-card, .footer__section');
                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;

                    if (elementPosition < screenPosition) {
                        element.style.opacity = '1';
                        element.style.transform = 'translateY(0)';
                    }
                });
            };

            const animatedElements = document.querySelectorAll('.product-card, .footer__section');
            animatedElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'all 0.6s ease-out';
            });

            window.addEventListener('scroll', animateOnScroll);
            animateOnScroll();

            const mapContainer = document.querySelector('.map-container');
            if (mapContainer) {
                mapContainer.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.02)';
                });

                mapContainer.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const scrollToTopBtn = document.getElementById('scrollToTopBtn');

            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    scrollToTopBtn.classList.add('active');
                } else {
                    scrollToTopBtn.classList.remove('active');
                }
            });

            scrollToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });

        const swiper = new Swiper('.categories-swiper', {
            loop: true,
            slidesPerView: 3,
            spaceBetween: 20,
            autoplay: {
                delay: 3000,
            },
            pagination: {
                el: '.products-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    spaceBetween: 20,
                },
                768: {
                    spaceBetween: 25,
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                }
            }
        });
    </script>
</body>
</html>
