<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="{{ mix('/css/share.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ mix('/css/packages.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="backdrop"></div>
    <div class="background"></div>
    @include('partials.nav')
    @include('partials.mobile-nav')
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
    @include('partials.footer')
</body>
</html>
