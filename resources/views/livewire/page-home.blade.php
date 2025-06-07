<div class="main-content">
    <section class="hero">
        <div class="hero__container container">
            <div class="hero__content">
                <h1 class="hero__title">
                    <span class="title__part">Дробь охотничья</span>
                    <span class="title__part title__part--accent">VOLGASHOT</span>
                </h1>

                <p class="hero__description">
                    Качественные боеприпасы для успешной охоты.
                    Выбирайте, заказывайте и получайте удовольствие от охоты!
                </p>

                <div class="hero__buttons">
                    <a href="#products" class="hero__cta hero__cta--primary">
                        <span>Смотреть товары</span>
                        <svg class="cta-icon" viewBox="0 0 24 24">
                            <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                        </svg>
                    </a>
                </div>
                <div class="hero__features">
                    <div class="feature">
                        <svg class="feature-icon" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg>
                        <span>Сертифицировано</span>
                    </div>
                    <div class="feature">
                        <svg class="feature-icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/></svg>
                        <span>Гарантия качества</span>
                    </div>
                </div>
            </div>
            <div class="hero__image-wrapper">
                <img src="{{ asset('/storage/main/olen.png') }}" alt="Охотничья дробь" class="hero__image">
                <div class="hero__image-decor"></div>
                <div class="hero__bullets">
                    <div class="bullet bullet--1"></div>
                    <div class="bullet bullet--2"></div>
                    <div class="bullet bullet--3"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="categories-section">
        <div class="container">
            <h2 class="section-title">Категории</h2>
            <div class="categories">
                <div class="categories-grid">
                    <div class="categories-article">
                        <a href="/category/fraction" class="category-card">
                                <div class="category-card__image-wrapper">
                                    <img src="{{ asset('/storage/main/drob.png') }}" alt="Дробь" class="category-card__image">
                                    <div class="category-card__overlay"></div>
                                    <div class="category-card__bullets">
                                        <span class="bullet"></span>
                                        <span class="bullet"></span>
                                        <span class="bullet"></span>
                                    </div>
                                </div>
                                <div class="category-card__content">
                                    <h3 class="category-card__title">Дробь</h3>
                                    <p class="category-card__description">Высококачественные боеприпасы для различной дичи</p>
                                    <span class="category-card__link">Смотреть ассортимент</span>
                                </div>
                            </a>
                        </div>

                        <div class="categories-article">
                            <a href="/category/buckshot" class="category-card">
                                <div class="category-card__image-wrapper">
                                    <img src="{{ asset('/storage/main/kartech.png') }}" alt="Картечь" class="category-card__image">
                                    <div class="category-card__overlay"></div>
                                    <div class="category-card__bullets">
                                        <span class="bullet"></span>
                                        <span class="bullet"></span>
                                        <span class="bullet"></span>
                                    </div>
                                </div>
                                <div class="category-card__content">
                                    <h3 class="category-card__title">Картечь</h3>
                                    <p class="category-card__description">Мощные заряды для крупной дичи</p>
                                    <span class="category-card__link">Смотреть ассортимент</span>
                                </div>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section id="products" class="products-section">
        <div class="container">
            <h2 class="section-title">Популярные товары</h2>
            <div class="swiper categories-swiper">
                <div class="swiper-wrapper">
                @foreach($categories as $category)
                    @foreach($category->products as $product)
                    <div class="swiper-slide">
                        <x-product.product-card :product="$product" />
                    </div>
                    @endforeach
                @endforeach
                </div>
                <div class="swiper-pagination products-pagination"></div>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <div class="about">
                <div class="about__content">
                    <h2 class="section-title">О компании <span class="text-accent">VOLGASHOT</span></h2>

                    <div class="about__text">
                        <p class="about__paragraph">
                            <svg class="about__icon" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                            Ваш надежный поставщик охотничьей дроби с 2010 года
                        </p>

                        <p class="about__paragraph">
                            <svg class="about__icon" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                            Производим качественную продукцию для охоты на любую дичь
                        </p>

                        <p class="about__paragraph">
                            <svg class="about__icon" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                            Собственное производство и строгий контроль качества
                        </p>

                        <div class="about__stats">
                            <div class="stat">
                                <div class="stat__number" data-count="14">14</div>
                                <div class="stat__label">лет на рынке</div>
                            </div>
                            <div class="stat">
                                <div class="stat__number" data-count="5000">5000</div>
                                <div class="stat__label">довольных клиентов</div>
                            </div>
                            <div class="stat">
                                <div class="stat__number" data-count="100">100</div>
                                <div class="stat__label">видов продукции</div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="about__image-wrapper">
                    <img src="{{ asset('/storage/main/olen.png') }}" alt="Производство VOLGASHOT" class="about__image">
                    <div class="about__image-decor"></div>
                </div>
            </div>
        </div>
    </section>
    @livewire('feedback-form')
    <section class="contacts-section">
        <div class="container">
            <h2 class="section-title">Контакты</h2>

            <div class="contacts-grid">
                <div class="contacts-map">
                    <div class="map-container">
                        <iframe
                            src="https://yandex.ru/map-widget/v1/?um=constructor%3A1fbcb60904dd405a63d45bac9d7ab781319bdff014a39996025eff759169a180&amp;source=constructor"
                            width="100%"
                            height="100%"
                            frameborder="0"
                            loading="lazy"
                            aria-label="Карта расположения VOLGASHOT">
                        </iframe>
                        <div class="map-overlay"></div>
                    </div>
                </div>

                <div class="contacts-info">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                        </div>
                        <div class="contact-content">
                            <h3 class="contact-title">Адрес</h3>
                            <p class="contact-text">400079, Россия, Волгоград, ул Самарская, влд. 1, офис 1</p>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/>
                            </svg>
                        </div>
                        <div class="contact-content">
                            <h3 class="contact-title">Телефоны</h3>
                            <p class="contact-text">
                                <a href="tel:+79616853212" class="contact-link">+7 961 685-32-12</a>
                            </p>
                            <p class="contact-text">
                                <a href="tel:+79785880648" class="contact-link">+7 978 588-06-48</a>
                            </p>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                        </div>
                        <div class="contact-content">
                            <h3 class="contact-title">Email</h3>
                            <p class="contact-text">
                                <a href="mailto:info@volgashot.ru" class="contact-link">info@volgashot.ru</a>
                            </p>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                            </svg>
                        </div>
                        <div class="contact-content">
                            <h3 class="contact-title">Режим работы</h3>
                            <p class="contact-text">Пн-Пт: 9:00 - 18:00</p>
                            <p class="contact-text">Сб-Вс: выходной</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
