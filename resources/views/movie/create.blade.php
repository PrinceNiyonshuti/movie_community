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
                        <form method="POST" action="/movie/store" enctype="multipart/form-data" class="user">
                            @csrf
                            <h4>Movie details</h4>
                            <div class="row">
                                <div class="col-md-4 form-it">
                                    <label>Cover</label>
                                    <input type="file" name="thumbnail" value="{{ old('thumbnail') }}" required>
                                    @error('thumbnail')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <label>Video</label>
                                    <input type="file" name="video" value="{{ old('video') }}">
                                    @error('video')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <label>Alternative Video</label>
                                    <input type="text" name="alternative_video" value="{{ old('alternative_video') }}" placeholder="Alternative Video link" required>
                                    @error('alternative_video')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="col-md-8 form-it">
                                    <label>Movie Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Movie Name" required>
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <label>Genre</label>
                                    <select name="genre_id" value="{{ old('genre_id') }}" required>
                                        @foreach (\App\Models\Genre::all() as $genre)
                                        <option value="{{ $genre->id }}" {{ old('genre_id' == $genre->id ? 'selected' : '') }}>{{ ucwords($genre->name) }}</option>
                                        @endforeach
                                        <!-- <option value="">-- Select Genre --</option>
                                        <option value="1">Sci-Fi</option>
                                        <option value="2">Drama</option>
                                        <option value="3">Action</option>
                                        <option value="4">Comedy</option>
                                        <option value="5">Adventure</option> -->
                                    </select>
                                    @error('genre_id')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <label>Released Data</label>
                                    <input type="date" name="released_date" value="{{ old('released_date') }}" placeholder="Movie Name" required>
                                    @error('released_date')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <label>Movie Director</label>
                                    <input type="text" name="director" value="{{ old('director') }}" placeholder="Movie Director" required>
                                    @error('director')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <label>Movie Writer</label>
                                    <input type="text" name="writer" value="{{ old('writer') }}" placeholder="Movie Writer" required>
                                    @error('writer')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <label>Movie Description</label>
                                    <textarea rows="40" cols="50" name="description" required>{{ old('description') }}</textarea>
                                    @error('writer')
                                    <p class="text-danger">{{ $description }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-8">
                                    <input class="submit" type="submit" value="save">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
