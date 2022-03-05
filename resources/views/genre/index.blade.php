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
                        <p><a href="/genre/create" class="redbtn">Add Genre</a></p>
                    </div>
                    <div class="flex-wrap-movielist user-fav-list">
                        @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            <p style="color:black">{{ session('success') }}</p>
                        </div>
                        @endif
                        @if ($genres->count()>=1)
                        <table class="table table-bordered" style="color:white">
                            <thead>
                                <td>#</td>
                                <td>Genre Name</td>
                                <td>Movies</td>
                                <td>action</td>
                                <td>action</td>
                            </thead>
                            @foreach ($genres as $genre)
                            <tr>
                                <td>{{ $genre->id }}</td>
                                <td><a href="/category/{{ $genre->name }}" style="color: white;">{{ $genre->name }}</a></td>
                                <td><a href="" style="color: white;"><a href="/category/{{ $genre->name }}">{{ $genre->movies->count() }} Movies</a></a></td>
                                <td><span><label class=" primarybtn"><a href="/genre/{{ $genre->id }}/edit">Edit</a></label></span></td>
                                <td>
                                    <form method="POST" action="/genre/{{ $genre->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type=" submit" class="dangerbtn">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @else
                        <h1>No Genre available , please make one</h1>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
