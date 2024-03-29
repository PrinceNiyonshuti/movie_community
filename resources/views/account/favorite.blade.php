<x-layout>
    <div class="hero user-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <x-profile-name />
                        <ul class="breadcumb">
                            <li class="active"><a href="/">Home</a></li>
                            <li> <span class="ion-ios-arrow-right"></span>Favorites</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-single">
        <div class="container">
            <div class="row ipad-width2">
                <x-sideBar />
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="topbar-filter user">
                        <p>Found <span>{{ $movies->count() }} movies</span> in total</p>
                    </div>
                    <div class="flex-wrap-movielist grid-fav">
                        @foreach ($movies as $movie)
                        <div class="movie-item-style-2 movie-item-style-1 style-3">
                            <img src="{{ $movie->thumbnail? '/storage/$movie->thumbnail':asset('images/uploads/mv-it6.jpg') }}" alt="">
                            <div class="hvr-inner">
                                <a href="/movies/{{ $movie->name}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="mv-item-info">
                                <h6><a href="/movies/{{ $movie->name}}">{{ $movie->name }}</a></h6>
                                <p class="yellow"><a href="/category/{{ $movie->genre->name }}">{{ $movie->genre->name }}</a></p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</x-layout>
