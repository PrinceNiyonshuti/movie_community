<x-layout>
    <div class="hero common-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1> Search results for {{$searchData}}</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="/">Home</a></li>
                            <li> <span class="ion-ios-arrow-right"></span>search results</li>
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
                            <p class="blue">{{ $movie->genre->name }}</p>
                            <p class="describe">{{Str::limit($movie->description, 150)}}</p>
                            <p class="run-time"> Release : {{ date('d F , Y', strtotime($movie->released_date))}}</p>
                            <p>Director: <a href="#">{{ $movie->director }}</a></p>
                            <p>writer: <a href="#">{{ $movie->writer }}</a> </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="searh-form">
                            <h4 class="sb-title">Search for movie</h4>
                            <form class="form-style-1" action="/movies/search" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 form-it">
                                        <label>Movie name</label>
                                        <input type="text" name="movie_name" placeholder="Enter keywords">
                                    </div>
                                    <div class="col-md-12 ">
                                        <input class="submit" type="submit" value="submit">
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
