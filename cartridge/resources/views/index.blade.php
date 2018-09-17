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
        <div class = "brief-about marginal-display margin-top-50">
            <p class = "text-justify"><img class="float-left pr-3" src="{{ URL::asset('img/profile-low-resolution.jpg') }}" alt = "Developer Photograph"/>I am a Software Developer by profession and an enthusiastic coder who love logic and reasoning by passion having an experience of 1+ year experience in Demandware [now Salesforce Commerce Cloud].</p>
            <p>I have proficiency in front-end designing and back-end architecture with expertise in HTML, ISML, CSS, SCSS/SASS, Demandware, jQuery, javascript, AJAX, JSON Gulp.js, XML etc.</p>
            <p>Coding is a passion that became my job role soon after I graduated. I have a deep knowledge of both front-end and the back-end as scripting languages like PHP, Python, Shell Script JavaScript and demandware script are one of the platforms that I like to play will in free time.</p>
            <p>I also know some of the 3rd party integrations of the APIs like wechat pay, Avarto SMS, Baidu Maps API, wechat/weibo/alipay social login etc. When I was in college, my final year project was a web app that was based on Java Servlet technology that simulated like a virtual diary with my work on both frontend and backend (MySQL).</p>
        </div>
        @include('projectLinks')

        @include('experience')

        @include('skills')

        @include('footer')
        
    </body>
</html>
