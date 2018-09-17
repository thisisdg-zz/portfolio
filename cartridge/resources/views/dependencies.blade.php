<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>
        <!--<link rel="icon" type="image/png" href="{{ URL::asset('img/portfolio_title_bar_icon.png') }}" />-->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    </head>
    
    <body>
        @include('header')
        <div class="marginal-display">
            <div class="heading-container text-center m-t-md m-b-md">
                <a href = "https://laravel.com/docs/5.7/installation" class="remove-text-decoration font-weight-bold">
                    <h1 class="heading"><img src = "{{ URL::asset('img/laravel_icon_large.png') }}" alt = "laravel_logo"/>laravel</h1>
                    <img src="{{ URL::asset('img/laravel_version_stable.png') }}" alt="stable versions"/>
                </a>
            </div>
            <h1 class="reduce-heading-font">About Laravel</h1>
            <p class="p-l-md">Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:</p>
            <ul>
                <li>Simple, fast routing engine.</li>
                <li>Powerful dependency injection container.</li>
                <li>Multiple back-ends for session and cache storage.</li>
                <li>Expressive, intuitive database ORM.</li>
                <li>Database agnostic schema migrations.</li>
                <li>Robust background job processing.</li>
                <li>Real-time event broadcasting.</li>
            </ul>
            <p class="p-l-md">Laravel is accessible, yet powerful, providing tools needed for large, robust applications.</p>
            <h1 class="reduce-heading-font">Learning Laravel</h1>
            <p class="p-l-md">Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.</p>

            <p class="p-l-md">If you're not in the mood to read, Laracasts contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.</p>

            <h1 class="reduce-heading-font">Laravel Sponsors</h1>
            <p class="p-l-md">We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel Patreon page:</p>
            <ul>
                <li>Vehikl</li>
                <li>Tighten Co.</li>
                <li>Kirschbaum Development Group</li>
                <li>Cubet Techno Labs</li>
                <li>British Software Development</li>
                <li>Webdock, Fast VPS Hosting</li>
                <li>UserInsights</li>
                <li>Fragrantica</li>
                <li>SOFTonSOFA</li>
                <li>User10</li>
                <li>Soumettre.fr</li>
                <li>CodeBrisk</li>
                <li>1Forge</li>
                <li>TECPRESSO</li>
                <li>Runtime Converter</li>
                <li>WebL'Agence</li>
                <li>Invoice Ninja</li>
                <li>iMi digital</li>
                <li>Earthlink</li>
                <li>Steadfast Collective</li>
            </ul>
            <h1 class="reduce-heading-font">Contributing</h1>
            <p class="p-l-md">Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the Laravel documentation.</p>
            <h1 class="reduce-heading-font">Security Vulnerabilities</h1>
            <p class="p-l-md">If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via taylor@laravel.com. All security vulnerabilities will be promptly addressed.</p>
            <h1 class="reduce-heading-font">License</h1>
            <p class="p-l-md">The Laravel framework is open-sourced software licensed under the MIT license.</p>
        </div>
        @include('footer')
    </body>
</html>
