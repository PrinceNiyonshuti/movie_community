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
    <div class="movie-items">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="topbar-filter">
                        <p>Found <span>{{ $members->count() }} members</span> in total</p>
                    </div>
                    <div class="flex-wrap-movielist grid-fav">
                        @foreach ($members as $member)
                        <div class="movie-item-style-2 movie-item-style-1 style-3">
                            <img src="{{ $member->avatar? '/storage/$member->avatar':asset('images/uploads/user-img.png') }}" style="height: 160px;" alt="{{ $member->username}}">
                            <div class="mv-item-infor">
                                <h6><a href="/member/{{ $member->username}}">{{ $member->username }}</a></h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-single">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="topbar-filter">
                        <p class="pad-change">Found <span>{{  $members->count()  }} members</span></p>
                        <label>Sort by:</label>
                        <select>
                            <option value="popularity">Popularity Descending</option>
                            <option value="popularity">Popularity Ascending</option>
                            <option value="rating">Rating Descending</option>
                            <option value="rating">Rating Ascending</option>
                            <option value="date">Release date Descending</option>
                            <option value="date">Release date Ascending</option>
                        </select>
                        <a href="celebritylist.html" class="list"><i class="ion-ios-list-outline "></i></a>
                        <a href="celebritygrid02.html" class="grid"><i class="ion-grid active"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="ceb-item-style-2">
                                <img src="images/uploads/ceb21.jpg" alt="">
                                <div class="ceb-infor">
                                    <h2><a href="celebritysingle.html">Leonardo DiCaprio</a></h2>
                                    <span>actor, uk</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ceb-item-style-2">
                                <img src="images/uploads/ceb22.jpg" alt="">
                                <div class="ceb-infor">
                                    <h2><a href="celebritysingle.html">Meryl Streep</a></h2>
                                    <span>actor, Iran</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ceb-item-style-2">
                                <img src="images/uploads/ceb23.jpg" alt="">
                                <div class="ceb-infor">
                                    <h2><a href="celebritysingle.html">Tom Hanks</a></h2>
                                    <span>Director, Sweden</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="topbar-filter">
                        <label>Reviews per page:</label>
                        <select>
                            <option value="range">36 Reviews</option>
                            <option value="saab">18 Reviews</option>
                        </select>

                        <div class="pagination2">
                            <span>Page 1 of 6:</span>
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">6</a>
                            <a href="#"><i class="ion-arrow-right-b"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12">
                    <div class="sidebar">
                        <div class="searh-form">
                            <h4 class="sb-title">Search celebrity</h4>
                            <form class="form-style-1 celebrity-form" action="#">
                                <div class="row">
                                    <div class="col-md-12 form-it">
                                        <label>Celebrity name</label>
                                        <input type="text" placeholder="Enter keywords">
                                    </div>
                                    <div class="col-md-12 form-it">
                                        <label>Celebrity Letter</label>
                                        <select>
                                            <option value="range">A</option>
                                            <option value="saab">B</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 form-it">
                                        <label>Category</label>
                                        <select>
                                            <option value="range">Actress</option>
                                            <option value="saab">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 form-it">
                                        <label>Year of birth</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select>
                                                    <option value="range">1970</option>
                                                    <option value="number">Other</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <select>
                                                    <option value="range">1990</option>
                                                    <option value="number">others</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 ">
                                        <input class="submit" type="submit" value="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="ads">
                            <img src="images/uploads/ads1.png" alt="">
                        </div>
                        <div class="celebrities">
                            <h4 class="sb-title">featured celebrity</h4>
                            <div class="celeb-item">
                                <a href="#"><img src="images/uploads/ava1.jpg" alt=""></a>
                                <div class="celeb-author">
                                    <h6><a href="#">Samuel N. Jack</a></h6>
                                    <span>Actor</span>
                                </div>
                            </div>
                            <div class="celeb-item">
                                <a href="#"><img src="images/uploads/ava2.jpg" alt=""></a>
                                <div class="celeb-author">
                                    <h6><a href="#">Benjamin Carroll</a></h6>
                                    <span>Actor</span>
                                </div>
                            </div>
                            <div class="celeb-item">
                                <a href="#"><img src="images/uploads/ava3.jpg" alt=""></a>
                                <div class="celeb-author">
                                    <h6><a href="#">Beverly Griffin</a></h6>
                                    <span>Actor</span>
                                </div>
                            </div>
                            <div class="celeb-item">
                                <a href="#"><img src="images/uploads/ava4.jpg" alt=""></a>
                                <div class="celeb-author">
                                    <h6><a href="#">Justin Weaver</a></h6>
                                    <span>Actor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
