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
    
    <body class="position-relative">
        @include('header')
		
		<div class="marginal-display margin-top-50">
            <h1 class="heading">Contact Info:</h1>
			<ul class="border-bottom-not-header projects-list">
				<li>@include('developer/contactmecall')</li>
				<li>@include('developer/contactmelinks')</li>
				<!--<li class="last-form">@include('developer/contactmeform')</li>-->
			</ul>
    	</div>
        
        @include('footer')
    
    </body>
</html>