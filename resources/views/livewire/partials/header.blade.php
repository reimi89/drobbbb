<header class="header">
    <div class="header__container container">
        <a href="/" class="header__logo">
            <span class="logo__text">VOLGASHOT</span>
            <span class="logo__bullet"></span>
        </a>

        <button class="header__burger" aria-label="Меню">
            <span class="burger__line"></span>
            <span class="burger__line"></span>
            <span class="burger__line"></span>
        </button>

        <nav class="header__nav">
            <menu class="header__menu">
                <li class="header__menu-item">
                    <a href="/about" class="header__menu-link">
                        <span class="link__text">О нас</span>
                        <span class="link__bullet"></span>
                    </a>
                </li>
                <li class="header__menu-item">
                    <a href="/category/fraction" class="header__menu-link">
                        <span class="link__text">Дробь</span>
                        <span class="link__bullet"></span>
                    </a>
                </li>
                <li class="header__menu-item">
                    <a href="/category/buckshot" class="header__menu-link">
                        <span class="link__text">Картечь</span>
                        <span class="link__bullet"></span>
                    </a>
                </li>
                <li class="header__menu-item">
                    <a href="/contact" class="header__menu-link">
                        <span class="link__text">Контакты</span>
                        <span class="link__bullet"></span>
                    </a>
                </li>
            </menu>

            <div class="header__marketplaces mobile-only">
                <a target="_blank" href="https://www.ozon.ru/seller/volgashot-2290576/" class="header__marketplace-link header__marketplace-link--ozon">Ozon</a>
                <a target="_blank" href="https://www.wildberries.ru/seller/4306216#c287942850" class="header__marketplace-link header__marketplace-link--wb">Wildberries</a>
            </div>
        </nav>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const burger = document.querySelector('.header__burger');
            const nav = document.querySelector('.header__nav');

            burger.addEventListener('click', function() {
                this.classList.toggle('active');
                nav.classList.toggle('active');

                if (nav.classList.contains('active')) {
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = '';
                }
            });

            const navLinks = document.querySelectorAll('.header__menu-link');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    burger.classList.remove('active');
                    nav.classList.remove('active');
                    document.body.style.overflow = '';
                });
            });
        });
    </script>
</header>
