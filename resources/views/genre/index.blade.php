<x-layout>
    <div class="hero user-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <x-profile-name />
                        <ul class="breadcumb">
                            <li class="active"><a href="/">Home</a></li>
                            <li> <span class="ion-ios-arrow-right"></span>Genres List</li>
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
                        <p><a href="/genre/new" class="redbtn">Add Genre</a></p>


                    </div>
                    <div class="flex-wrap-movielist user-fav-list">
                        @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            <p>{{ session('success') }}</p>
                        </div>
                        @endif

                        @if ($genres->count()>=1)
                        @foreach ($genres as $genre)
                        <div class="movie-item-style-2">
                            <div class="mv-item-infor">
                                <h6>
                                    <a href="#">{{ $genre->name }}</a>
                                    &nbsp; <span><label class=" primarybtn"><a href="/genre/{{ $genre->id }}/edit">Edit</a></label></span> &nbsp;
                                    -
                                    <!-- &nbsp; <span>
                                        <form method="POST" action="/genre/{{ $genre->id }}" >
                                            @csrf
                                            @method('DELETE')
                                            <label type=" submit" class="dangerbtn">Delete</label>
                                        </form>
                                    </span> -->
                                </h6>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <h1>No Genre available , please make one</h1>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
