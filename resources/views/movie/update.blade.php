<x-layout>

    <div class="hero user-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <x-profile-name />
                        <ul class="breadcumb">
                            <li class="active"><a href="/">Home</a></li>
                            <li> <span class="ion-ios-arrow-right"></span>Profile</li>
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
                    <div class="form-style-1 user-pro" action="#">
                        @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            <p>{{ session('success') }}</p>
                        </div>
                        @endif
                        <form method="POST" action="/movie/{{ $movie->id }}" enctype="multipart/form-data" class="user">
                            @csrf
                            @method('PATCH')
                            <h4>Movie details</h4>
                            <div class="row">
                                <div class="col-md-4 form-it">
                                    <label>Recent Cover</label>
                                    <div class="movie-item-style-2">
                                        <img src="/storage/{{ $movie->thumbnail }}" width="80%" alt="">
                                    </div>
                                    <label>Cover</label>
                                    <input type="file" name="thumbnail" value="{{ $movie->thumbnail }}">
                                    @error('thumbnail')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    @if ($movie->video)
                                    <label>Recent Video</label>
                                    <div class="movie-item-style-2">
                                        <video width="100%" height="200" controls>
                                            <source src="/storage/{{ $movie->video }}" type="video/mp4">
                                            <source src="movie.ogg" type="video/ogg">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    @endif

                                    <label>Video</label>
                                    <input type="file" name="video">
                                    @error('video')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <label>Alternative Video</label>
                                    <input type="text" name="alternative_video" value="{{ $movie->alternative_video}}" placeholder="Alternative Video link" required>
                                    @error('alternative_video')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="col-md-8 form-it">
                                    <label>Movie Name</label>
                                    <input type="text" name="name" value="{{$movie->name}}" placeholder="Movie Name" required>
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <label>Genre</label>
                                    <select name="genre_id" value="{{ old('genre_id') }}" required>
                                        @foreach (\App\Models\Genre::all() as $genre)
                                        <option value="{{ $genre->id }}" {{ old('genre_id',$movie->genre_id == $genre->id ? 'selected' : '') }}>{{ ucwords($genre->name) }}</option>
                                        @endforeach
                                    </select>
                                    @error('genre_id')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <label>Released Data</label>
                                    <input type="date" name="released_date" value="{{ $movie->released_date}}" placeholder="Movie Name" required>
                                    @error('released_date')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <label>Movie Director</label>
                                    <input type="text" name="director" value="{{ $movie->director }}" placeholder="Movie Director" required>
                                    @error('director')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <label>Movie Writer</label>
                                    <input type="text" name="writer" value="{{ $movie->writer }}" placeholder="Movie Writer" required>
                                    @error('writer')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <label>Movie Description</label>
                                    <textarea rows="40" cols="50" name="description" required>{{ $movie->description }}</textarea>
                                    @error('writer')
                                    <p class="text-danger">{{ $description }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-8">
                                    <input class="submit" type="submit" value="update">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
