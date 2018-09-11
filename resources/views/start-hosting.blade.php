<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>uHost Signup</title>
    <link rel="shortcut icon" href="../favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Anton|Montserrat:400,700" rel="stylesheet">
    <link href="{{ mix('/css/share.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="start-hosting.css">
</head>

<body>
<div class="backdrop"></div>
@include('partials.nav')
@include('partials.mobile-nav')
<main class="signup-page">
    <h1 class="signup-title">Awesome! Let's dive right in!</h1>
    <form action="index.html" class="signup-form">
        <label for="title">Title</label>
        <select id="title">
            <option value="mr">Mr.</option>
            <option value="ms">Ms.</option>
        </select>
        <label for="first-name">First name</label>
        <input type="text" id="first-name">
        <label for="last-name">Last name</label>
        <input type="text" id="last-name">
        <label for="email">E-Mail</label>
        <input type="email" id="email">
        <label for="password">Password</label>
        <input type="password" id="password">
        <input type="checkbox" id="agree-terms">
        <label for="agree-terms">Agree to
            <a href="#">Terms &amp; Conditions</a>
        </label>
        <button type="submit" class="button">Sign Up</button>
    </form>
</main>
@include('partials.footer')
<script src="../shared.js"></script>
</body>

</html>