<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="{{ mix('/css/share.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ mix('/css/packages.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="background"></div>
    <header class="main-header">
        <div>
            <a href="{{ route('home') }}" class="main-header__brand">
                uHost
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
                    <a href="start-hosting/index.html">Start Hosting</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="package section-plan__plus">
            <a href="#">
                <h1 class="package__title">Our PLUS Plan</h1>
                <h2 class="package__badge">RECOMMENDED</h2>
                <h2 class="package__subtitle">The most popular choice of our customers.</h2>
                <p class="package__info">Benefit from increased storage and faster support to ensure that your mission-critical data and applications
                    are always available!</p>
            </a>
        </section>
        <section class="package section-plan__free">
            <a href="#">
                <h1 class="package__title">Our FREE Plan</h1>
                <h2 class="package__subtitle">An extremely solid start into our hosting world.</h2>
                <p class="package__info">Get started immediately at zero cost!</p>
            </a>
        </section>
        <div class="clearfix"></div>
        <section class="package section-plan__premium">
            <a href="#">
                <h1 class="package__title section-plan__title__premium">Our PREMIUM Plan</h1>
                <h2 class="package__subtitle package__subtitle__color">All your enterprise needs. Instant support, guaranteed uptime. </h2>
                <p class="package__info">The best solution for small to large enterprises. Because hosting shouldn't be in the way!</p>
            </a>
        </section>
    </main>
<footer class="main-footer">
    <nav>
        <ul class="main-footer__links">
            <li class="main-footer__link">
                <a href="">Support</a>
            </li>
            <li class="main-footer__link">
                <a href="">Terms of Use</a>
            </li>
        </ul>
    </nav>
</footer>
</body>
</html>
