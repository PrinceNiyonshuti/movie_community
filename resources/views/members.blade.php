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
                    <div class="flex-wrap-movielist grid-fav">
                        @foreach ($members as $member)
                        <div class="movie-item-style-2 movie-item-style-1 style-3">
                            <img src="{{ $member->avatar? '/storage/$member->avatar':asset('images/uploads/mv-it4.jpg') }}" width="160" height="224" alt="{{ $member->username}}">
                            <!-- <div class="hvr-inner">
                                <a href="/member/{{ $member->username}}"> View activity <i class="ion-android-arrow-dropright"></i> </a>
                            </div> -->
                            <div class="mv-item-infor">
                                <h6><a href="/movies/{{ $member->name}}">{{ $member->username }}</a></h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <h1>Coming soon</h1>
    </div>
</x-layout>
