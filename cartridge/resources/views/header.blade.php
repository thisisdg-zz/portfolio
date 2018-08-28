<header class="flex-center sticky-top m-b-md m-t-md">
    <div class="position-ref">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

        <div class="content left">
            <div class="links">
                <!--href="{{ url('/developer/developer-profile') }}"-->
                <a href="{{ route('resume') }}">Developer Profile</a>
                <a href="{{ route('devstory') }}">Developer Profile</a>
                <a href="index/developer/developer-profile">Developer Profile</a>
                <a href="{{ url('/developer/developer-story') }}">Developer Story</a>
                <a href="javascript:void(0)">Blog</a>
                <a href="{{ url('/developer/contact-me') }}">Contact Me</a>
                <!--<a href="https://github.com/laravel/laravel">GitHub</a>-->
            </div>
        </div>
    </div>
</header>