<x-layout>
    <div class="hero mv-single-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>
    <div class="page-single movie-single movie_single">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="movie-img sticky-sb">
                        <img src="{{ $movie->thumbnail? '/storage/$movie->thumbnail':asset('images/uploads/movie-single.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="movie-single-ct main-content">
                        <h1 class="bd-hd">{{ $movie->name }} <span>{{ date('Y', strtotime($movie->released_date))}}</span></h1>
                        <div class="social-btn">
                            @auth
                            <form id="btn btn-default" method="POST" action="/favorite/{{ $movie->name }}">
                                @csrf
                                <button type="submit" class="log-out"><i class="ion-heart"></i> {{ __('movie.add_to_favorite') }}</button>
                            </form>
                            @else
                            <a href="#" class="parent-btn btn loginLink"><i class="ion-heart"></i> {{ __('movie.login_to_save_favorites') }}</a>
                            @endauth

                        </div>
                        <div class="movie-tabs">
                            <div class="tabs">
                                <ul class="tab-links tabs-mv">
                                    <li class="active"><a href="#overview">{{ __('movie.overview') }}</a></li>
                                    <li><a href="#moviesrelated">{{ __('movie.related_movies') }}</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="overview" class="tab active">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-12 col-xs-12">
                                                <p>{{ $movie->description }}</p>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12">
                                                <div class="sb-it">
                                                    <h6>{{ __('movie.director') }}: </h6>
                                                    <p><a href="#">{{ $movie->director }}</a></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>{{ __('movie.writer') }}: </h6>
                                                    <p><a href="#">{{ $movie->writer }}</a></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>{{ __('movie.genres') }}:</h6>
                                                    <p><a href="/category/{{ $movie->genre->name }}">{{ $movie->genre->name }}</p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>{{ __('movie.release_date') }}:</h6>
                                                    <p>{{ date('F d ,Y', strtotime($movie->released_date))}}</p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>{{ __('movie.uploaded_by') }}:</h6>
                                                    <p><a href="/member/{{ $movie->user->username }}">{{ $movie->user->username }}</a></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12" style="margin-top:15px">
                                                <h2 class="mt-5">{{ __('movie.watch_movie') }}</h2>
                                                @if ($movie->video)
                                                <video width="100%" height="400" controls>
                                                    <source src="/storage/{{ $movie->video }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                                @else
                                                <p style="font-size: 20px;">use this alternative link &nbsp; <a href="{{ $movie->alternative_video }}" target="_blank" style="color:yellow;font-weight:bold">{{ $movie->name }}</a></p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div id="reviews" class="tab review">
                                        <div class="row">
                                            <div class="rv-hd">
                                                <div class="div">
                                                    <h3>{{ __('movie.related_movies') }}</h3>
                                                    <h2>{{ $movie->name }}</h2>
                                                </div>
                                                <a href="#" class="redbtn">Write Review</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="moviesrelated" class="tab">
                                        <div class="row">
                                            <h3>{{ __('movie.related_movies') }}</h3>
                                            <h2>{{ $movie->name }}</h2>
                                            <div class="topbar-filter">
                                                <p>{{ __('movie.found') }} <span>{{ $related_movies->count() }} {{ __('movie.movie') }}</span> {{ __('movie.in_total') }}</p>

                                            </div>
                                            @foreach ($related_movies as $related )
                                            <div class="movie-item-style-2">
                                                <img src="{{ $related->thumbnail? '/storage/$related->thumbnail':asset('images/uploads/mv2.jpg') }}" alt="/movies/{{ $related->name}}">
                                                <div class="mv-item-infor">
                                                    <h6><a href="/movies/{{ $related->name}}">{{ $related->name }} <span>( {{ date('Y', strtotime($related->released_date))}} )</span></a></h6>
                                                    <p class="rate">{{ $related->genre->name }}</p>
                                                    <p class="describe">{{Str::limit($related->description, 150)}}</p>
                                                    <p class="run-time"> Release : {{ date('d F , Y', strtotime($related->released_date))}}</p>
                                                    <p>Director: <a href="#">{{ $related->director }}</a></p>
                                                    <p>writer: <a href="#">{{ $related->writer }}</a> </p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
