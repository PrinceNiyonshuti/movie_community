<x-layout>

    <div class="slider movie-items">
        <div class="container">
            <div class="row">
                <div class="social-link">
                    <p>{{ __('navigation.follow_us') }}: </p>
                    <a href="#"><i class="ion-social-facebook"></i></a>
                    <a href="#"><i class="ion-social-twitter"></i></a>
                    <a href="#"><i class="ion-social-googleplus"></i></a>
                    <a href="#"><i class="ion-social-youtube"></i></a>
                </div>
                <div class="slick-multiItemSlider">
                    @foreach ($movies as $movie)
                    <div class="movie-item">
                        <div class="mv-img">
                            <a href="/movies/{{ $movie->name}}"><img src="{{ $movie->thumbnail? '/storage/$movie->thumbnail': asset('images/uploads/series-img.jpg') }}" alt="{{ $movie->name }}" class="feat-img"></a>
                        </div>
                        <div class="title-in">
                            <div class="cate">
                                <span class="blue"><a href="/category/{{ $movie->genre->name }}">{{ $movie->genre->name }}</a></span>
                            </div>
                            <h6><a href="/movies/{{ $movie->name}}">{{ $movie->name }}</a></h6>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="movie-items">
        <div class="container">
            <div class="row ipad-width">
                <div class="col-md-8">
                    <div class="title-hd">
                        <h2>{{ __('navigation.latest') }}</h2>
                        <a href="/movies" class="viewall">{{ __('navigation.view_all') }} <i class="ion-ios-arrow-right"></i></a>
                    </div>
                    <div class="flex-wrap-movielist grid-fav">
                        @foreach ($movies as $movie)
                        <div class="movie-item-style-2 movie-item-style-1 style-3">
                            <img src="{{ $movie->thumbnail? '/storage/$movie->thumbnail':asset('images/uploads/mv-it4.jpg') }}" width="160" height="224" alt="{{ $movie->name}}">
                            <div class="hvr-inner">
                                <a href="/movies/{{ $movie->name}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="mv-item-infor">
                                <h6><a href="/movies/{{ $movie->name}}">{{ $movie->name }}</a></h6>
                                <p class="yellow"><a href="/category/{{ $movie->genre->name }}">{{ $movie->genre->name }}</a></p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="title-hd">
                        <h2>{{ __('navigation.trending') }}</h2>
                        <a href="/movies" class="viewall">{{ __('navigation.view_all') }} <i class="ion-ios-arrow-right"></i></a>
                    </div>
                    <div class="tabs">
                        <div class="tab-content">
                            <div id="tab1" class="tab active">
                                <div class="row">
                                    <div class="slick-multiItem">
                                        @foreach ($movies as $movie)
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="{{ $movie->thumbnail? '/storage/$movie->thumbnail': asset('images/uploads/mv-it6.jpg') }}" alt="{{ $movie->name}}" class="trend-img">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a href="/movies/{{ $movie->name}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="/movies/{{ $movie->name}}">{{ $movie->name}}</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="ads">
                            <img src="images/uploads/ads1.png" alt="" width="336" height="296">
                        </div>
                        <div class="celebrities">
                            <h4 class="sb-title">{{ __('navigation.community_member') }}</h4>
                            @foreach ($members as $member)
                            <div class="celeb-item">
                                <a href="/member/{{ $member->username }}"><img src="{{ $member->avatar ? '/storage/$member->avatar' :asset('images/uploads/user-img.png') }}" alt="" width="70" height="70"></a>

                                <div class="celeb-author">
                                    <h6><a href="/member/{{ $member->username }}">{{ $member->username }}</a></h6>
                                    <span>{{ $member->IsAdmin ? 'Admin':'Member' }}</span>
                                </div>
                            </div>
                            @endforeach
                            <a href="/members" class="btn">See all members<i class="ion-ios-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
