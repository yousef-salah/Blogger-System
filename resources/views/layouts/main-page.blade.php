<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completed - NewsFlash | Home</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/images/favicon.png') }}">
    <!-- Remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Swiper.js styles -->
    <link rel="stylesheet" href="{{ asset('/assets/css/swiper-bundle.min.css') }}"/>
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">

    @stack('style')
</head>
<body>
    <!-- Header -->
    <header class="header" id="header">

        <nav class="navbar container">
            <a href="{{ route('blogs.index') }}">
                <h2 class="logo">NewsFlash</h2>
            </a>

            <div class="menu" id="menu">
                <ul class="list">
                    <li class="list-item">
                        <a href="#" class="list-link current">Home</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Categories</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Reviews</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">News</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Membership</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Contact</a>
                    </li>
                    @auth
                        <li class="list-item screen-lg-hidden">
                            <a onclick="document.getElementById('logout_form').submit()" href="#" class="list-link">Log out</a>
                        </li>
                        <li class="list-item screen-lg-hidden">
                            <a href="{{ route('dashboard.index') }}" class="list-link">Dashboard</a>
                        </li>
                    @endauth

                    @guest
                        <li class="list-item screen-lg-hidden">
                            <a href="{{ route('login') }}" class="list-link">Sign in</a>
                        </li>
                        <li class="list-item screen-lg-hidden">
                            <a href="{{ route('register') }}" class="list-link">Sign up</a>
                        </li>
                    @endguest
                </ul>
            </div>

            <div class="list list-right">
                <button class="btn place-items-center" id="theme-toggle-btn">
                    <i class="ri-sun-line sun-icon"></i>
                    <i class="ri-moon-line moon-icon"></i>
                </button>

                <button class="btn place-items-center" id="search-icon">
                    <i class="ri-search-line"></i>
                </button>

                <button class="btn place-items-center screen-lg-hidden menu-toggle-icon" id="menu-toggle-icon">
                    <i class="ri-menu-3-line open-menu-icon"></i>
                    <i class="ri-close-line close-menu-icon"></i>
                </button>
                @auth
                    <form action="{{ route('logout') }}" method="post" id="logout_form">
                        @csrf
                    </form>
                    <a href="#" onclick="document.getElementById('logout_form').submit()" class="list-link screen-sm-hidden">Log out</a>
                    <a href="{{ route('dashboard.index') }}" class="btn sign-up-btn fancy-border screen-sm-hidden">
                        <span>Dashboard</span>
                    </a>
                @endauth
                @guest
                    <a href="{{ route('login') }}" class="list-link screen-sm-hidden">Sign in</a>
                    <a href="{{ route('register') }}" class="btn sign-up-btn fancy-border screen-sm-hidden">
                        <span>Sign up</span>
                    </a>
                @endguest
            </div>

        </nav>

    </header>

    <!-- Search -->
    <div class="search-form-container container" id="search-form-container">

        <div class="form-container-inner">

            <form action="" class="form">
                <input class="form-input" type="text" placeholder="What are you looking for?">
                <button class="btn form-btn" type="submit">
                    <i class="ri-search-line"></i>
                </button>
            </form>
            <span class="form-note">Or press ESC to close.</span>

        </div>

        <button class="btn form-close-btn place-items-center" id="form-close-btn">
            <i class="ri-close-line"></i>
        </button>

    </div>

    @yield('content')

    <!-- Newsletter -->
    <section class="newsletter section">

        <div class="container">

            <h2 class="title section-title" data-name="Newsletter">Newsletter</h2>

            <div class="form-container-inner">
                <h6 class="title newsletter-title">Subscribe to NewsFlash</h6>
                <p class="newsletter-description">Lorem ipsum dolor sit amet consectetur adipisicing quaerat dignissimos.</p>

                <form action="" class="form">
                    <input class="form-input" type="text" placeholder="Enter your email address">
                    <button class="btn form-btn" type="submit">
                        <i class="ri-mail-send-line"></i>
                    </button>
                </form>

            </div>

        </div>

    </section>

    <!-- Footer -->
    <footer class="footer section">
        <div class="footer-container container d-grid">
            
            <div class="company-data">
                <a href="./index.html">
                    <h2 class="logo">NewsFlash</h2>
                </a>
                <p class="company-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, iure. Harum, animi dolores, nam, ad magni expedita.</p>
                <ul class="list social-media">
                    <li class="list-item">
                        <a href="#" class="list-link"><i class="ri-instagram-line"></i></a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link"><i class="ri-facebook-circle-line"></i></a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link"><i class="ri-twitter-line"></i></a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link"><i class="ri-pinterest-line"></i></a>
                    </li>
                </ul>
                <span class="copyright-notice">&copy;2021 NewsFlash. All rights reserved.</span>
            </div>

            <div>
                <h6 class="title footer-title">Categories</h6>
                <ul class="footer-list list">
                    <li class="list-item">
                        <a href="#" class="list-link">Travel</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Food</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Technology</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Health</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Nature</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Fitness</a>
                    </li>
                </ul>
            </div>

            <div>
                <h6 class="title footer-title">Useful links</h6>
                <ul class="footer-list list">
                    <li class="list-item">
                        <a href="#" class="list-link">Home</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Elements</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Tags</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Authors</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Membership</a>
                    </li>
                </ul>
            </div>

            <div>
                <h6 class="title footer-title">Company</h6>
                <ul class="footer-list list">
                    <li class="list-item">
                        <a href="#" class="list-link">Contact us</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">F.A.Q</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Careers</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Authors</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Memberships</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Swiper.js -->
    <script src="{{ asset('/assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Custom script -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>

    @stack('script')
</body>
</html>