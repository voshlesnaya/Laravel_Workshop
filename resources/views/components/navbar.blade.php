<nav class="navbar" id="navbar">
    <div class="wrap">
        <div class="navbar__inner">

            <a href="{{ route('home') }}" class="navbar__logo">
                <img src="{{ asset('img/logo.png') }}" alt="МИДиС" class="navbar__logo-img">
            </a>

            <ul class="navbar__nav">
                <li class="navbar__nav-item">
                    <a href="{{ route('home') }}" 
   class="navbar__nav-link {{ request()->routeIs('home') ? 'navbar__nav-link--active' : '' }}">Главная</a>
                </li>
                <li class="navbar__nav-item">
                    <a href="#about" class="navbar__nav-link">О нас</a>
                </li>
                <li class="navbar__nav-item">
                    <a href="#services" class="navbar__nav-link">Услуги</a>
                </li>
                <li class="navbar__nav-item">
                    <a href="#portfolio" class="navbar__nav-link">Портфолио</a>
                </li>
                <li class="navbar__nav-item">
                    <a href="{{ route('blog') }}" 
   class="navbar__nav-link {{ request()->routeIs('blog') ? 'navbar__nav-link--active' : '' }}">Блог</a>
                </li>
            </ul>

            <div class="navbar__right">
                <a href="#contact" class="btn btn-primary btn-sm">Оставить заявку</a>
            </div>

        </div>
    </div>
</nav>
