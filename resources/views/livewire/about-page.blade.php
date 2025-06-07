<div class="about-page">
    <section class="about-hero">
        <div class="container">
            <div class="about-hero__content">
                <h1 class="about-hero__title" data-aos="fade-up">
                    <span>{{ $about->hero_title }}</span>
                    <span class="text-accent">VOLGASHOT</span>
                </h1>
                <p class="about-hero__subtitle" data-aos="fade-up" data-aos-delay="100">
                    {{ $about->hero_subtitle }}
                </p>
                <div class="about-hero__image" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ url('storage', $about->hero_image) }}" alt="VOLGASHOT производство">
                    <div class="bullet-animation">
                        <span class="bullet"></span>
                        <span class="bullet"></span>
                        <span class="bullet"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-mission">
        <div class="container">
            <div class="about-mission__grid">
                <div class="about-mission__content" data-aos="fade-right">
                    <h2 class="section-title">
                        {!! $about->mission_title !!}
                    </h2>
                    <p class="about-mission__text">
                        {!! $about->mission_text !!}
                    </p>
                    <div class="about-mission__features">
                        @foreach($about->features as $feature)
                            <div class="feature-card" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                                <div class="feature-icon">
                                    <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4 8-8z"/></svg>
                                </div>
                                <h3>{{ $feature['title'] }}</h3>
                                <p>{{ $feature['description'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="about-mission__image" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{ url('storage', $about->mission_image) }}" alt="Производство VOLGASHOT">
                    <div class="image-decor"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-history">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">
                Наша <span class="text-accent">история</span>
            </h2>
            <div class="about-history__timeline">
                @foreach($about->history_items as $item)
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="timeline-year">{{ $item['year'] }}</div>
                        <div class="timeline-content">
                            <h3>{{ $item['title'] }}</h3>
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="about-production">
        <div class="container">
            <div class="about-production__grid">
                <div class="about-production__image" data-aos="fade-right">
                    <img src="{{ url('storage', $about->production_image) }}" alt="Технологии производства">
                    <div class="production-bullets">
                        <span class="bullet"></span>
                        <span class="bullet"></span>
                        <span class="bullet"></span>
                        <span class="bullet"></span>
                    </div>
                </div>
                <div class="about-production__content" data-aos="fade-left">
                    <h2 class="section-title">
                        {!! $about->production_title !!}
                    </h2>
                    <p class="about-production__text">
                        {!! $about->production_text !!}
                    </p>
                    <div class="production-steps">
                        @foreach($about->production_steps as $step)
                            <div class="step" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                                <div class="step-number">{{ $loop->iteration }}</div>
                                <div class="step-content">
                                    <h3>{{ $step['title'] }}</h3>
                                    <p>{{ $step['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-team">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">
                {!!  $about->team_title !!}
            </h2>
            <p class="about-team__subtitle" data-aos="fade-up" data-aos-delay="100">
                {{ $about->team_subtitle }}
            </p>
            <div class="about-team__grid">
                @foreach($about->team_members as $member)
                    <div class="team-card" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="team-card__image">
                            <img src="{{ url('storage', $member['photo']) }}" alt="{{ $member['name'] }}">
                            <div class="team-card__decor"></div>
                        </div>
                        <div class="team-card__content">
                            <h3>{{ $member['name'] }}</h3>
                            <p class="position">{{ $member['position'] }}</p>
                            <p class="bio">{{ $member['bio'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="about-certificates">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">
                Наши <span class="text-accent">сертификаты</span>
            </h2>
            <div class="certificates-slider" data-aos="fade-up" data-aos-delay="100">
                @foreach($about->certificates as $certificate)
                    <div class="certificate">
                        <img src="{{ url('storage', $certificate['image']) }}" alt="{{ $certificate['title'] }}">
                        <p>{{ $certificate['title'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="about-cta">
        <div class="container">
            <div class="about-cta__content" data-aos="fade-up">
                <h2>{{ $about->cta_text }}</h2>
                <a href="{{ $about->cta_button_link }}" class="cta-button">
                    <span>{{ $about->cta_button_text }}</span>
                    <svg viewBox="0 0 24 24">
                        <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</div>
