<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    </head>
    
    <body>
        @include('header')

        @include('project-links')

        @include('footer')

        <!--

            @include('developer/developer-profile')
            @include('developer/developer-story')
            @include('developer/resume')
            @include('interactive-animations')
            @include('developer/contact-me')
        
        -->
    </body>
</html>
