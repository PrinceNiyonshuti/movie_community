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
                </div>
            </div>
        </div>
        <h1>Coming soon</h1>
    </div>
</x-layout>
