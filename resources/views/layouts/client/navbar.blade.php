<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="{{ url('home') }}">ELearning<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <i class="bi bi-list mobile-nav-toggle"></i>
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ url('home') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('about') }}">About</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('services') }}">Services</a></li>
                    <li><a class="nav-link scrollto " href="{{ 'portfolio' }}">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="{{ 'team' }}">Team</a></li>
                    
                <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @guest
                            @if (Route::has('login'))
                                <li class="dropdown">
                                    <a class="nav-link scrollto" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="dropdown">
                                    <a class="nav-link scrollto" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="dropdown">
                                <a class="nav-link scrollto" href="">{{ Auth::user()->name }}</a>
                            </li>
                            <li class="dropdown">
                                <a class="nav-link scrollto" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </li>
            </ul>

        </nav><!-- .navbar -->

        <a href="#about" class="get-started-btn scrollto">Get Started</a>
    </div>
</header>

{{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> 
                                <i class="bi bi-chevron-right"></i></a>
                            </li>
                    </ul>
                </li> --}}
                {{-- <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a> --}}
