<section class="about section" id="about">
    <span class="section__subtitle">My intro</span>
    <h2 class="section__title">About me</h2>

    <div class="about__container container grid">
        <img src="{{ asset('images/about.jpg') }}" alt="Me" class="about__img">

        <div class="about__data">
            <div class="about__info">
                <div class="about__box">
                    <i class='bx bx-award about__icon'></i>
                    <h3 class="about__title">Experience</h3>
                    <span class="about__subtitle">5+ Years</span>
                </div>

                <div class="about__box">
                    <i class='bx bxs-baby-carriage  about__icon' ></i>
                    <h3 class="about__title">Age</h3>
                    <span class="about__subtitle">{{ $age }} years</span>
                </div>

                <div class="about__box">
                    <i class='bx bx-current-location about__icon' ></i>
                    <h3 class="about__title">Location</h3>
                    <span class="about__subtitle">The Netherlands</span>
                </div>
            </div>

            <p class="about__description">
                When I was around 14 years old I began teaching myself how to program in Java.
                Since then I have learned a lot of new skills I currently use to create awesome projects for awesome people.
            </p>
            <p class="about__description">
                I am currently studying infrastructure and security management at the <span style="font-style: italic">Hogeschool van Arnhem en Nijmegen (HAN)</span>.
            </p>
            <a href="https://linkedin.com/in/jasperjakobs" class="button button--ghost" target="_blank">
                LinkedIn
            </a>
            <a href="#contact" class="button">Contact me</a>
        </div>
    </div>
</section>
