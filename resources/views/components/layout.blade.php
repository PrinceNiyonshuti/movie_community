<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <!-- Basic need -->
    <title>Movies Community</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">
    <link href="{{ asset('images/logo1.png') }}" rel="icon">
    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">

    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <!--login form popup-->
    <div class="login-wrapper" id="login-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>Login</h3>
            <form method="post" action="/login">
                @csrf
                <div class="row">
                    <label for="email">
                        Email:
                        <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Hugh Jackman" required="required" />
                    </label>
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row">
                    <label for="password">
                        Password:
                        <input type="password" name="password" id="password" placeholder="******" required="required" />
                    </label>
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="row">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
    <!--end of login form popup-->
    <!--signup form popup-->
    <div class="login-wrapper" id="signup-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>sign up</h3>
            <form method="post" action="/register">
                @csrf
                <div class="row">
                    <label for="username-2">
                        Username:
                        <input type="text" name="username" id="username" value="{{ old('username') }}" placeholder="Your username" required="required" />
                    </label>
                    @error('username')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row">
                    <label for="email-2">
                        your email:
                        <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Your Email" required="required" />
                    </label>
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="row">
                    <label for="password-2">
                        Password:
                        <input type="password" name="password" id="password" placeholder="" required="required" />
                    </label>
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="row">
                    <button type="submit">sign up</button>
                </div>
            </form>
        </div>
    </div>
    <!--end of signup form popup-->

    <!-- BEGIN | Header -->
    <header class="ht-header">
        <div class="container">
            <nav class="navbar navbar-default navbar-custom">
                <div class="navbar-header logo">
                    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <a href="/"><img class="logo" src="{{asset('images/logo1.png')}}" alt="" width="119" height="58"></a>
                </div>
                <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav flex-child-menu menu-left">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="dropdown first">
                            <a class="btn btn-default" href="/">
                                Home
                            </a>
                        </li>
                        <li class="dropdown first">
                            <a class="btn btn-default" href="/movies">
                                All Movies
                            </a>
                        </li>
                        @auth
                        <li class="dropdown first">
                            <a class="btn btn-default" href="/account">
                                Account
                            </a>
                        </li>
                        <li class="dropdown first">
                            <a class="btn btn-default" href="/movie">
                                Add Movie
                            </a>
                        </li>
                        @endauth
                    </ul>
                    <ul class="nav navbar-nav flex-child-menu menu-right">
                        @auth
                        <li class=""><a href="/account">{{ Auth::user()->username }}</a></li>
                        <form id="btn btn-default" method="POST" action="/logout">
                            @csrf
                            <button type="submit" class="log-out">Logout</button>
                        </form>

                        @else
                        <li class="btn btn-default"><a href="#">Log In</a></li>
                        <li class="btn signupLink"><a href="#">Register</a></li>
                        @endauth
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <!-- top search form -->

            <form action="/movies/search" method="post">
                @csrf
                <div class="top-search">
                    <input type="text" name="movie_name" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
                </div>
            </form>

        </div>
    </header>
    {{ $slot }}
    <footer class="ht-footer">
        <div class="container">
            <div class="flex-parent-ft">
                <div class="flex-child-ft item1">
                    <a href="index-2.html"><img class="logo" src="images/logo1.png" alt=""></a>
                    <p>KG 56 St , Kigali city<br>
                        Kigali city, Rwanda</p>
                    <p>Call us: <a href="#">(+250) 788 888 8888</a></p>
                </div>
                <div class="flex-child-ft item2">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item3">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Security</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item4">
                    <h4>Account</h4>
                    <ul>
                        <li><a href="/account">My Account</a></li>
                        <li><a href="#">Watchlist</a></li>
                        <li><a href="#">Collections</a></li>
                        <li><a href="#">User Guide</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item5">
                    <h4>Newsletter</h4>
                    <p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your email...">
                    </form>
                    <a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
                </div>
            </div>
        </div>
        <div class="ft-copyright">
            <div class="ft-left">
            </div>
            <div class="backtotop">
                <p><a href="#" id="back-to-top" style="color: white;">Back to top <i class="ion-ios-arrow-thin-up"></i></a></p>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/plugins2.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
