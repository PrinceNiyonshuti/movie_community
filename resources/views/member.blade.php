<x-layout>
    <div class="hero user-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1>{{ $member['firstName'] }} {{ $member['lastName'] }} {{ __('member.profile') }}</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="/">{{ __('navigation.home') }}</a></li>
                            <li> <span class="ion-ios-arrow-right"></span>{{ __('member.member_activity') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-single">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="user-information">
                        <div class="user-img">
                            @if ($member['avatar'])
                            <a href="#"><img src="/storage/{{ $member['avatar'] }}" alt="{{ $member['username'] }}" width="120"><br></a>
                            @else
                            <a href="#"><img src="{{asset('images/uploads/user-img.png')}}" alt="{{ $member['username'] }}"><br></a>
                            @endif

                            <a href="#" class="redbtn">{{ $member['username'] }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="topbar-filter user">
                        <p>{{ __('movie.found') }} <span>{{ $movies->count() }} {{ __('movie.movie') }}</span> {{ __('movie.in_total') }}</p>
                    </div>
                    <div class="flex-wrap-movielist grid-fav">
                        @foreach ($movies as $movie)
                        <div class="movie-item-style-2 movie-item-style-1 style-3">
                            <img src="{{ $movie->thumbnail? '/storage/$movie->thumbnail':asset('images/uploads/mv2.jpg') }}" alt="">
                            <div class="hvr-inner">
                                <a href="/movies/{{ $movie->name}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="mv-item-infor">
                                <h6><a href="/movies/{{ $movie->name}}">{{ $movie->name }}</a></h6>
                                <p class="yellow">{{ $movie->genre->name }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
