<div class="col-md-3 col-sm-12 col-xs-12">
    <div class="user-information">
        <div class="user-img">
            <a href="#"><img src="{{asset('images/uploads/user-img.png')}}" alt=""><br></a>
            <a href="#" class="redbtn">{{ Auth::user()->username }}</a>
        </div>
        <div class="user-fav">
            <p>Account Details</p>
            <ul>
                <li class="{{ request()->is('account') ? 'active' : '' }}"><a href="/account">Dashboard</a></li>
                <li class="{{ request()->is('movie') ? 'active' : '' }}"><a href="/movie">Add Movie</a></li>
                <li class="{{ request()->is('favorite') ? 'active' : '' }}"><a href="/favorite">Favorite movies</a></li>
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
