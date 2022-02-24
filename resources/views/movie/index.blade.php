<x-layout>
    <div class="hero user-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <x-profile-name />
                        <ul class="breadcumb">
                            <li class="active"><a href="/">Home</a></li>
                            <li> <span class="ion-ios-arrow-right"></span>Movie List</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-single userfav_list">
        <div class="container">
            <div class="row ipad-width2">
                <x-sideBar />
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div style="margin-bottom: 30px;">
                        <p><a href="/movie/new" class="redbtn">Add Movie</a></p>


                    </div>
                    <div class="flex-wrap-movielist user-fav-list">
                        @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            <p>{{ session('success') }}</p>
                        </div>
                        @endif

                        @if ($movies->count()>=1)
                        @foreach ($movies as $movie)
                        <div class="movie-item-style-2">
                            <img src="/storage/{{ $movie->thumbnail }}" alt="{{ $movie->name}}" class="trend-img">
                            <div class="mv-item-infor">
                                <h6><a href="/movies/{{ $movie->name}}">{{ $movie->name }} <span>( {{ date('Y', strtotime($movie->released_date))}} )</span></a></h6>
                                <p class="describe">{{Str::limit($movie->description, 200)}}</p>
                                <br>
                                <p class="row">
                                <div class="col-md-1">
                                    <button class=" primarybtn"><a href="/movie/{{ $movie->id }}/edit">Edit</a></span>
                                </div>
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-1">
                                    <form method="POST" action="/movie/{{ $movie->id }}" class="col-md-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type=" submit" class="dangerbtn">Delete</button>
                                    </form>
                                </div>
                                </p>

                            </div>
                        </div>
                        @endforeach
                        @else
                        <h1>Please upload and provide movies to the community</h1>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
