<x-layout>
    <div class="hero common-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1> movie listing - list</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="#">Home</a></li>
                            <li> <span class="ion-ios-arrow-right"></span> movie listing</li>
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
                        <p>Found <span>{{ $movies->count() }} movies</span> in total</p>
                    </div>
                    @foreach ($movies as $movie)
                    <div class="movie-item-style-2">
                        <img src="/storage/{{ $movie->thumbnail }}" alt="{{ $movie->name }}">
                        <div class="mv-item-infor">
                            <h6><a href="/movies/{{ $movie->name}}">{{ $movie->name }} <span>( {{ date('Y', strtotime($movie->released_date))}} )</span></a></h6>
                            <!-- <p class="rate"><i class="ion-android-star"></i><span>8.1</span> /10</p> -->
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
                            <h4 class="sb-title">Search for movie</h4>
                            <form class="form-style-1" action="#">
                                <div class="row">
                                    <div class="col-md-12 form-it">
                                        <label>Movie name</label>
                                        <input type="text" placeholder="Enter keywords">
                                    </div>
                                    <div class="col-md-12 form-it">
                                        <label>Genres & Subgenres</label>
                                        <div class="group-ip">
                                            <select name="skills" multiple="" class="ui fluid dropdown">
                                                <option value="">Enter to filter genres</option>
                                                <option value="Action1">Action 1</option>
                                                <option value="Action2">Action 2</option>
                                                <option value="Action3">Action 3</option>
                                                <option value="Action4">Action 4</option>
                                                <option value="Action5">Action 5</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-12 form-it">
                                        <label>Rating Range</label>

                                        <select>
                                            <option value="range">-- Select the rating range below --</option>
                                            <option value="saab">-- Select the rating range below --</option>
                                            <option value="saab">-- Select the rating range below --</option>
                                            <option value="saab">-- Select the rating range below --</option>
                                        </select>

                                    </div>
                                    <div class="col-md-12 form-it">
                                        <label>Release Year</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select>
                                                    <option value="range">From</option>
                                                    <option value="number">10</option>
                                                    <option value="number">20</option>
                                                    <option value="number">30</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <select>
                                                    <option value="range">To</option>
                                                    <option value="number">20</option>
                                                    <option value="number">30</option>
                                                    <option value="number">40</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 ">
                                        <input class="submit" type="submit" value="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="sb-twitter sb-it">
                            <h4 class="sb-title">Tweet to us</h4>
                            <div class="slick-tw">
                                <div class="tweet item" id="">
                                    <!-- Put your twiter id here -->
                                </div>
                                <div class="tweet item" id="">
                                    <!-- Put your 2nd twiter account id here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
