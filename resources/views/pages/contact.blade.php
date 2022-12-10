<x-layout>
    <div class="hero common-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1>{{ __('common.contact_us') }}</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="/">{{ __('navigation.home') }}</a></li>
                            <li> <span class="ion-ios-arrow-right"></span>{{ __('common.contact_us') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-single">
        <div class="container">
            <div class="row ipad-width">
                <!-- <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="user-information">
                        <div class="user-img">
                            <a href="#"><img src="images/uploads/user-img.png" alt=""><br></a>
                            <a href="#" class="redbtn">Change avatar</a>
                        </div>
                        <div class="user-fav">
                            <p>Account Details</p>
                            <ul>
                                <li class="active"><a href="userprofile.html">Profile</a></li>
                                <li><a href="userfavoritelist.html">Favorite movies</a></li>
                                <li><a href="userrate.html">Rated movies</a></li>
                            </ul>
                        </div>
                        <div class="user-fav">
                            <p>Others</p>
                            <ul>
                                <li><a href="#">Change password</a></li>
                                <li><a href="#">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-style-1 user-pro" action="#">
                        <form action="#" class="user">
                            <h4>Leave Us A Message</h4>
                            <div class="row">
                                <div class="col-md-6 form-it">
                                    <label>Username</label>
                                    <input type="text" placeholder="edwardkennedy">
                                </div>
                                <div class="col-md-6 form-it">
                                    <label>Email Address</label>
                                    <input type="text" placeholder="edward@kennedy.com">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-it">
                                    <label>First Name</label>
                                    <input type="text" placeholder="Edward ">
                                </div>
                                <div class="col-md-6 form-it">
                                    <label>Last Name</label>
                                    <input type="text" placeholder="Kennedy">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
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
