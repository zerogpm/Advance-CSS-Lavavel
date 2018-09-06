<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="{{ mix('/css/share.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ mix('/css/foo.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
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
                        <a href="customers/index.html">Customers</a>
                    </li>
                    <li class="main-nav__item main-nav__item--cta">
                        <a href="start-hosting/index.html">Start Hosting</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <section id="product-overview">
                <h1>Get the freedom you deserve.</h1>
            </section>
            <section id="plans">
                <h1 class="section-title">Choose your plan</h1>
                <div class="plan__list">
                    <article class="plan">
                        <h1 class="plan__title">FREE</h1>
                        <h2 class="plan__price">$0/month</h2>
                        <h3>For hobby projects or small teams.</h3>
                        <ul class="plan__features">
                            <li>1 Workspace</li>
                            <li>Unlimited Traffic</li>
                            <li>10GB Storage</li>
                            <li>Basic Support</li>
                        </ul>
                        <div>
                            <button class="button">CHOOSE PLAN</button>
                        </div>
                    </article>
                    <article class="plan plan--highlighted">
                        <h1 class="plan__annotation">RECOMMENDED</h1>
                        <h1 class="plan__title">PLUS</h1>
                        <h2 class="plan__price">$29/month</h2>
                        <h3>For ambitious projects.</h3>
                        <ul class="plan__features">
                            <li>5 Workspaces</li>
                            <li>Unlimited Traffic</li>
                            <li>100GB Storage</li>
                            <li>Plus Support</li>
                        </ul>
                        <div>
                            <button class="button">CHOOSE PLAN</button>
                        </div>
                    </article>
                    <article class="plan">
                        <h1 class="plan__title">PREMIUM</h1>
                        <h2 class="plan__price">$99/month</h2>
                        <h3>Your enterprise solution.</h3>
                        <ul class="plan__features">
                            <li>10 Workspaces</li>
                            <li>Unlimited Traffic</li>
                            <li>Unlimited Storage</li>
                            <li>Priority Support</li>
                        </ul>
                        <div>
                            <button class="button">CHOOSE PLAN</button>
                        </div>
                    </article>
                </div>
            </section>
            <section id="key-features">
                <h1 class="section-title">Many Good Reasons to Stick Around</h1>
                <ul class="key-features__list">
                    <li class="key-feature">
                        <div class="key-feature__image">

                        </div>
                        <p class="key-feature__description">3,857,000 Trusting Customers</p>
                    </li>
                    <li class="key-feature">
                        <div class="key-feature__image">

                        </div>
                        <p class="key-feature__description">99.999% Uptime Guarantee</p>
                    </li>
                    <li class="key-feature">
                        <div class="key-feature__image">

                        </div>
                        <p class="key-feature__description">Lightning Fast CDN</p>
                    </li>
                </ul>
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
