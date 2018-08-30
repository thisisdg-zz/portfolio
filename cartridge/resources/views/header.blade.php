<header class="header-color header-border">
    <div class="flex-box marginal-display items-align-center">
        <button class="menu-toggle-closed">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="flex-center sticky-top m-b-md m-t-md full-width">
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
                        <a href="{{ route('devprofile') }}">Developer Profile</a>
                        <a href="{{ url('/developer/developer-story') }}">Developer Story</a>
                        <a href="javascript:void(0)">Blog</a>
                        <a href="{{ url('/developer/contact-me') }}">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</header>