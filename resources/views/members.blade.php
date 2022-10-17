<x-layout>
    <div class="hero common-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1> {{ __('member.member_list') }} - {{ __('member.list') }}</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="/">{{ __('navigation.home') }}</a></li>
                            <li> <span class="ion-ios-arrow-right"></span>{{ __('member.list') }}</li>
                        </ul>
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
                        <p>{{ __('member.found') }} <span>{{ $members->count() }} members</span> {{ __('member.in_total') }}</p>
                    </div>
                    <div class="row">
                        @foreach ($members as $member)
                        <div class="col-md-4">
                            <div class="ceb-item-style-2">
                                <img src="{{ $member->avatar? '/storage/$member->avatar':asset('images/uploads/ceb21.jpg') }}" alt="">
                                <div class="ceb-infor">
                                    <h2><a href="/member/{{ $member->username}}">{{ $member->username }}</a></h2>
                                    <span>actor, uk</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12">
                    <div class="sidebar">
                        <div class="searh-form">
                            <h4 class="sb-title">Search Member</h4>
                            <form class="form-style-1 Member-form" action="#">
                                <div class="row">
                                    <div class="col-md-12 form-it">
                                        <label>Member name</label>
                                        <input type="text" placeholder="Enter keywords">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
