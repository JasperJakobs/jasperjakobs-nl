<section class="home section" id="home">
    <div class="home__container container grid">
        <div class="home__data">
            <span class="home__greeting">Hallo, ik ben</span>
            <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="home__name">
            <h3 class="home__education">iemand die goed is met computers.</h3>

            <div class="home__buttons">
                <a href="#work" class="button button--ghost">
                    Mijn werk
                </a>
                <a href="#about" class="button button--glow">Over mij</a>
            </div>
        </div>

        <div class="home__waves">
            <img src="{{ asset('images/wave_left.svg') }}" alt="Wave" class="home__wave-left">
            <img src="{{ asset('images/wave_right.svg') }}" alt="Wave" class="home__wave-right">
        </div>


        <div class="home__social">
            <a href="https://linkedin.com/in/jasperjakobs" class="home__social-link" target="_blank">
                <i class='bx bxl-linkedin-square' ></i>
            </a>

            <a href="https://github.com/JasperJakobs" class="home__social-link" target="_blank">
                <i class='bx bxl-github' ></i>
            </a>

            <a href="https://twitter.com/JasperJakobs" class="home__social-link" target="_blank">
                <i class='bx bxl-twitter' ></i>
            </a>
        </div>

        <a href="#about" class="home__scroll">
            <i class="bx bx-mouse home__scroll-icon"></i>
            <i class="bx bx-down-arrow-alt home__scroll-icon"></i>
        </a>
    </div>
</section>
