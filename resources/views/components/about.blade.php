<section class="about section" id="about">
    <span class="section__subtitle">Introductie</span>
    <h2 class="section__title">Over mij</h2>

    <div class="about__container container grid">
        <img src="{{ asset('images/about.jpg') }}" alt="Me" class="about__img">

        <div class="about__data">
            <div class="about__info">
                <div class="about__box">
                    <i class='bx bx-award about__icon'></i>
                    <h3 class="about__title">Ervaring</h3>
                    <span class="about__subtitle">{{ $experience }}+ jaar</span>
                </div>

                <div class="about__box">
                    <i class='bx bxs-baby-carriage  about__icon' ></i>
                    <h3 class="about__title">Leeftijd</h3>
                    <span class="about__subtitle">{{ $age }} jaar</span>
                </div>

                <div class="about__box">
                    <i class='bx bx-current-location about__icon' ></i>
                    <h3 class="about__title">Locatie</h3>
                    <span class="about__subtitle">Arnhem, Gelderland</span>
                </div>

                <div class="about__box">
                    <i class='bx bxs-briefcase about__icon' ></i>
                    <h3 class="about__title">Occupatie</h3>
                    <span class="about__subtitle">Student</span>
                </div>
            </div>

            <p class="about__description">
                Toen ik ongeveer 14 jaar oud was begon ik mezelf programmeren te leren in de taal java.
                Sinds die tijd heb ik veel geleerd en nu gebruik ik die kennis om gave projecten te maken voor geweldige mensen!
            </p>
            <p class="about__description">
                Ik studeer op dit moment infrastructure and security management aan de <span style="font-style: italic">Hogeschool van Arnhem en Nijmegen (HAN)</span>.
            </p>
            <a href="https://linkedin.com/in/jasperjakobs" class="button button--ghost" target="_blank">
                LinkedIn
            </a>
            <a href="#contact" class="button button--glow">Contact</a>
        </div>
    </div>
</section>
