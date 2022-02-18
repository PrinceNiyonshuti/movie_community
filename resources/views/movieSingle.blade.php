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
                        <img src="/storage/{{ $movie->thumbnail }}" alt="">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="movie-single-ct main-content">
                        <h1 class="bd-hd">{{ $movie->name }} <span>{{ date('Y', strtotime($movie->released_date))}}</span></h1>
                        <div class="social-btn">
                            <a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
                        </div>
                        <!-- <div class="movie-rate">
                            <div class="rate">
                                <i class="ion-android-star"></i>
                                <p><span>8.1</span> /10<br>
                                    <span class="rv">56 Reviews</span>
                                </p>
                            </div>
                            <div class="rate-star">
                                <p>Rate This Movie: </p>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star-outline"></i>
                            </div>
                        </div> -->
                        <div class="movie-tabs">
                            <div class="tabs">
                                <ul class="tab-links tabs-mv">
                                    <li class="active"><a href="#overview">Overview</a></li>
                                    <li><a href="#moviesrelated"> Related Movies</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="overview" class="tab active">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-12 col-xs-12">
                                                <p>{{ $movie->description }}</p>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12">
                                                <div class="sb-it">
                                                    <h6>Director: </h6>
                                                    <p><a href="#">{{ $movie->director }}</a></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Writer: </h6>
                                                    <p><a href="#">{{ $movie->writer }}</a></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Genres:</h6>
                                                    <p><a href="#">{{ $movie->genre->name }}</p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Release Date:</h6>
                                                    <p>{{ date('F d ,Y', strtotime($movie->released_date))}}</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12" style="margin-top:15px">
                                                <h2 class="mt-5">Watch Movie</h2>
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
                                                    <h3>Related Movies To</h3>
                                                    <h2>{{ $movie->name }}</h2>
                                                </div>
                                                <a href="#" class="redbtn">Write Review</a>
                                            </div>
                                            <div class="topbar-filter">
                                                <p>Found <span>56 reviews</span> in total</p>

                                            </div>
                                            <div class="mv-user-review-item">
                                                <div class="user-infor">
                                                    <img src="{{ asset('images/uploads/userava1.jpg') }}" alt="">
                                                    <div>
                                                        <h3>Best Marvel movie in my opinion</h3>
                                                        <div class="no-star">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star last"></i>
                                                        </div>
                                                        <p class="time">
                                                            17 December 2016 by <a href="#"> hawaiipierson</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>This is by far one of my favorite movies from the MCU. The introduction of new Characters both good and bad also makes the movie more exciting. giving the characters more of a back story can also help audiences relate more to different characters better, and it connects a bond between the audience and actors or characters. Having seen the movie three times does not bother me here as it is as thrilling and exciting every time I am watching it. In other words, the movie is by far better than previous movies (and I do love everything Marvel), the plotting is splendid (they really do out do themselves in each film, there are no problems watching it more than once.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="moviesrelated" class="tab">
                                        <div class="row">
                                            <h3>Related Movies To</h3>
                                            <h2>{{ $movie->name }}</h2>
                                            <div class="topbar-filter">
                                                <p>Found <span>{{ $related_movies->count() }} movies</span> in total</p>

                                            </div>
                                            @foreach ($related_movies as $related )
                                            <div class="movie-item-style-2">
                                                <img src="/storage/{{ $related->thumbnail }}" alt="/movies/{{ $related->name}}">
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
