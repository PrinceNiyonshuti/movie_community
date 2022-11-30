<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <!-- Basic need -->
    <title>Movies Community</title>
    <meta charset="UTF-8">
    <meta name="description" content="Movie community will facilitate the passion for movie making within our community ,To our knowledge we haven’t seen this done before and are looking to construct the simplest way to accomplish it.  A film can be as complicated or simple as you make it and we are trying to find the right shoe to fit around what a community can produce without sacrificing quality.">
    <meta name="keywords" content="Movie community , Movies , Community">
    <meta name="author" content="Prince Niyonshuti">
    <link href="{{ asset('images/logo1.png') }}" rel="icon">
    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">
    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- flags -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
    <style>
        .sub {
            font-family: "Dosis", sans-serif;
            font-size: 14px;
            color: #dd003f;
            font-weight: bold;
            text-transform: uppercase;
            border: none !important;
            background: none;
            margin-top: 2px;
        }
    </style>
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
                                {{ __('navigation.home') }}
                            </a>
                        </li>
                        <li class="dropdown first">
                            <a class="btn btn-default" href="/movies">
                                {{ __('navigation.all_movies') }}
                            </a>
                        </li>
                        <li class="dropdown first">
                            @if ( Config::get('languages')[App::getLocale()] != "" || !is_null( Config::get('languages')[App::getLocale()]) )
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown">
                                <span class="fi fi-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }} &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            @endif
                            <ul class="dropdown-menu level1">
                                @foreach (Config::get('languages') as $locale => $language)
                                @if ($locale != App::getLocale())
                                <li><a href="{{ route('locale.change', $locale) }}"><span class="fi fi-{{$language['flag-icon']}}"></span>{{$language['display']}}</a></li>
                                @endif
                                @endforeach
                            </ul>
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
                        <li class="btn loginLink" style="margin-right: 10px;"><a href="#">{{ __('navigation.login') }}</a></li>
                        <li class="btn signupLink"><a href="#">{{ __('navigation.register') }}</a></li>
                        @endauth
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <!-- top search form -->

            <form action="/movies/search" method="post">
                @csrf
                <div class="top-search">
                    <input type="text" name="movie_name" placeholder='{{ __('navigation.search_home') }}'>
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
                    <p>Call us: <a href="#">(+250) 788 888 888</a></p>
                </div>
                <div class="flex-child-ft item2">
                    <h4>{{ __('navigation.resources') }}</h4>
                    <ul>
                        <li><a href="{{route('contact')}}">{{ __('common.contact_us') }}</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item3">
                    <h4>{{ __('navigation.legal') }}</h4>
                    <ul>
                        <li><a href="{{route('terms')}}">{{ __('common.term_of_us') }}</a></li>
                        <li><a href="{{route('privacy')}}">{{ __('common.privacy_policy') }}</a></li>
                        <li><a href="{{route('security')}}">{{ __('common.security') }}</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item4">
                    <h4>{{ __('navigation.account') }}</h4>
                    <ul>
                        <li><a href="/account">{{ __('common.my_account') }}</a></li>
                        <li><a href="#">{{ __('common.watch_list') }}</a></li>
                        <li><a href="#">User Guide</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item5">
                    <h4>{{ __('navigation.newsletter') }}</h4>
                    <p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
                    <form method="POST" action="/subscribe">
                        @csrf
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email...">
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <button type="submit" class="btn sub">Subscribe now <i class="ion-ios-arrow-forward"></i></button>
                    </form>
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
