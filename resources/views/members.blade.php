<x-layout>
    <div class="hero common-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1> members listing - list</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="/">Home</a></li>
                            <li> <span class="ion-ios-arrow-right"></span> members listing</li>
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
                        <p>Found <span>{{ $members->count() }} members</span> in total</p>
                    </div>
                    @foreach ($members as $member)
                    <div class="movie-item-style-2">
                        <img src="{{ $movie->thumbnail? '/storage/$member->avatar': asset('images/uploads/poster1.jpg') }}" alt="{{ $movie->name }}">
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
                </div>
            </div>
        </div>
        <h1>Coming soon</h1>
    </div>
</x-layout>
