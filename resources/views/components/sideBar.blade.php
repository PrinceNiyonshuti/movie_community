<div class="col-md-3 col-sm-12 col-xs-12">
    <div class="user-information">
        <div class="user-img">
            @if (Auth::user()->avatar)
            <a href="#"><img src="/storage/{{ Auth::user()->avatar }}" alt="{{ Auth::user()->username }}" width="120"><br></a>
            @else
            <a href="#"><img src="{{asset('images/uploads/user-img.png')}}" alt="{{ Auth::user()->username }}"><br></a>
            @endif

            <a href="#" class="redbtn">{{ Auth::user()->username }}</a>
        </div>
        <div class="user-fav">
            <p>{{ __('dashboard.account_details') }}</p>
            <ul>
                <li class="{{ request()->is('account') ? 'active' : '' }}"><a href="/account">Dashboard</a></li>
                <li class="{{ request()->is('movie') ? 'active' : '' }}"><a href="/movie">Add Movie</a></li>
                @can('Admin')
                <li class="{{ request()->is('genre') ? 'active' : '' }}"><a href="/genre">Genres</a></li>
                @endcan
                <li class="{{ request()->is('favorite') ? 'active' : '' }}"><a href="/favorites">Favorite movies</a></li>
            </ul>
        </div>
        <div class="user-fav">
            <p>Others</p>
            <ul>
                <li class="{{ request()->is('account/profile') ? 'active' : '' }}"><a href="/account/profile">Settings</a></li>
                <li><a href="#">Log out</a></li>
            </ul>
        </div>
    </div>
</div>
