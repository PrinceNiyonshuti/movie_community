<x-layout>
    <div class="hero common-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1> {{ __('movie.movie_list') }} - {{ __('movie.list') }}</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="/">{{ __('navigation.home') }}</a></li>
                            <li> <span class="ion-ios-arrow-right"></span>{{ __('movie.list') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-single movie_list">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="topbar-filter">
                        <p>{{ __('movie.found') }} <span>{{ $movies->count() }} movies</span> {{ __('movie.in_total') }}</p>
                    </div>
                    @foreach ($movies as $movie)
                    <div class="movie-item-style-2">
                        <img src="{{ $movie->thumbnail? '/storage/$movie->thumbnail': asset('images/uploads/poster1.jpg') }}" alt="{{ $movie->name }}" style="width: 128px;height:197px;">
                        <div class="mv-item-infor">
                            <h6><a href="/movies/{{ $movie->name}}">{{ $movie->name }} <span>( {{ date('Y', strtotime($movie->released_date))}} )</span></a></h6>
                            <p class="blue"><a href="/category/{{ $movie->genre->name }}">{{ $movie->genre->name }}</a></p>
                            <p class="describe">{{Str::limit($movie->description, 150)}}</p>
                            <p class="run-time"> Release : {{ date('d F , Y', strtotime($movie->released_date))}}</p>
                            <p>Director: <a href="#">{{ $movie->director }}</a></p>
                            <p>writer: <a href="#">{{ $movie->writer }}</a> </p>
                        </div>
                    </div>
                    @endforeach
                    {{$movies->links()}}
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="searh-form">
                            <h4 class="sb-title">{{ __('movie.search_for_movie') }}</h4>
                            <form class="form-style-1" action="/movies/search" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 form-it">
                                        <label>{{ __('movie.movie_name') }}</label>
                                        <input type="text" name="movie_name" placeholder="Enter keywords">
                                    </div>
                                    <div class="col-md-12 ">
                                        <input class="submit" type="submit" value="{{ __('movie.search') }}">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
