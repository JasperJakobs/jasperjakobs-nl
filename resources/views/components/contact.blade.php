<section class="contact section" id="contact">
    <span class="section__subtitle">Een connectie zoeken</span>
    <h2 class="section__title">Contact</h2>

    <div class="contact__container container grid">
        <div class="contact__content">
            <h3 class="contact__title">Praat met me</h3>

            <div class="contact__info">
                <div class="contact__card">
                    <i class="bx bx-mail-send contact__card-icon"></i>
                    <h3 class="contact__card-title">Email</h3>
                    <span class="contact__card-data">contact@jasperjakobs.nl</span>

                    <a href="mailto:contact@jasperjakobs.nl" class="contact__button">
                        Stuur een mail <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                    </a>
                </div>

                <div class="contact__card">
                    <i class="bx bxl-twitter contact__card-icon"></i>
                    <h3 class="contact__card-title">Twitter</h3>
                    <span class="contact__card-data">@JasperJakobs</span>

                    <a href="https://twitter.com/JasperJakobs" target="_blank" class="contact__button">
                        Bezoek pagina <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                    </a>
                </div>

                <div class="contact__card">
                    <i class="bx bxl-linkedin-square contact__card-icon"></i>
                    <h3 class="contact__card-title">Linkedin</h3>
                    <span class="contact__card-data">in/JasperJakobs</span>

                    <a href="https://linkedin.com/in/jasperjakobs" target="_blank" class="contact__button">
                        Bezoek pagina <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="contact__content">
            <h3 class="contact__title">Vertel iets over je project</h3>

            <form action="send-message" id="contact__form" method="post" class="contact__form">
                @csrf
                <div class="contact__form-div">
                    <label for="name" class="contact__form-tag">Naam</label>
                    <input type="text" placeholder="John Doe" class="contact__form-input" name="name" id="name" required/>
                </div>

                <div class="contact__form-div">
                    <label for="email" class="contact__form-tag">Mail</label>
                    <input type="email" placeholder="johndoe@example.com" class="contact__form-input" name="email" id="email" required/>
                </div>

                <div class="contact__form-div contact__form-area">
                    <label for="project" class="contact__form-tag">Project</label>
                    <textarea name="project" id="project" cols="30" rows="10" placeholder="Iets over je project..." class="contact__form-input" required></textarea>
                </div>

                <button data-sitekey="6LdkPXcgAAAAAFN1HL-wtz_acc7yJhrZQpHXcKIB"
                        data-callback='onSubmit'
                        data-action='submit'
                        class="button g-recaptcha">Verstuur bericht</button>
                <p class="footnote">This site is protected by reCAPTCHA and the Google
                    <a class="link" target="_blank" href="https://policies.google.com/privacy">Privacy Policy</a> and
                    <a class="link" target="_blank" href="https://policies.google.com/terms">Terms of Service</a> apply.
                </p>
            </form>
        </div>
    </div>

    <script>
        function onSubmit(token) {
            document.getElementById("contact__form").submit();
        }
    </script>
</section>
