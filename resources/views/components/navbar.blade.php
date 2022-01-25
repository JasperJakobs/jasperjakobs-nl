<nav class="nav container">
    <a href="{{ url("") }}" class="nav__logo">
        <img src="{{ asset('images/logo.svg') }}" alt="Logo">
    </a>

    <div class="nav__menu">
        <ul class="nav__list">
            <li class="nav__item">
                <a href="{{ url("/#home") }}" class="nav__link">
                    <i class='bx bx-home-alt'></i>
                </a>
            </li>
            <li class="nav__item">
                <a href="{{ url("/#about") }}" class="nav__link">
                    <i class='bx bx-user'></i>
                </a>
            </li>
            <li class="nav__item">
                <a href="{{ url("/#skills") }}" class="nav__link">
                    <i class='bx bx-book'></i>
                </a>
            </li>
            <li class="nav__item">
                <a href="{{ url("/#work") }}" class="nav__link">
                    <i class='bx bx-briefcase-alt-2' ></i>
                </a>
            </li>
            <li class="nav__item">
                <a href="{{ url("/#contact") }}" class="nav__link">
                    <i class='bx bx-message-square-detail'></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
