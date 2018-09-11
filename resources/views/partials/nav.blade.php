<header class="main-header">
    <div>
        <button class="toggle-button">
            <span class="toggle-button__bar"></span>
            <span class="toggle-button__bar"></span>
            <span class="toggle-button__bar"></span>
        </button>
        <a href="{{ route('home') }}" class="main-header__brand">
            <img src="{{ asset('uhost.png') }}" alt="uHost - your favorite hosting company">
        </a>
    </div>
    <nav class="main-nav">
        <ul class="main-nav__items">
            <li class="main-nav__item">
                <a href="{{ route('packages') }}">Packages</a>
            </li>
            <li class="main-nav__item">
                <a href="{{ route('customers') }}">Customers</a>
            </li>
            <li class="main-nav__item main-nav__item--cta">
                <a href="{{ route('hosting') }}">Start Hosting</a>
            </li>
        </ul>
    </nav>
</header>
