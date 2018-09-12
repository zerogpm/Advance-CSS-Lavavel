<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>uHost Customers</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link href="{{ mix('/css/share.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ mix('/css/customer.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
<div class="backdrop"></div>
@include('partials.nav')
@include('partials.mobile-nav')
<main>
    <div>
        <div class="testimonial" id="customer-1">
            <div class="testimonial__image-container">
                <img src="{{ asset('customer-1.jpg') }}" alt="Mike Statham - Customer" class="testimonial__image">
            </div>
            <div class="testimonial__info">
                <h1 class="testimonial__name">Mike Statham</h1>
                <h2 class="testimonial__subtitle">Founder of
                    <a href="tech-analysis.com">tech-analysis.com</a>
                </h2>
                <p class="testimonial__text">uHost helped me realize my project with a highly constrained budget in like no time.</p>
            </div>
        </div>
        <div class="testimonial" id="customer-2">

            <div class="testimonial__info">
                <h1 class="testimonial__name">John Mellow</h1>
                <h2 class="testimonial__subtitle">Hosts his private videos on uHost.
                </h2>
                <p class="testimonial__text">I worked as a blogger and always looked for an integrated hosting and file storage solution. I found
                    it in uHost!
                </p>
            </div>
            <div class="testimonial__image-container">
                <img src="{{ asset('customer-2.jpg') }}" alt="John Mellow - Customer" class="testimonial__image">
            </div>
        </div>
    </div>
</main>
@include('partials.footer')
<script src="{{ mix('/js/main.js') }}"></script>
</body>

</html>
