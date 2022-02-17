<x-layout>

    <div class="hero user-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1>Edward kennedy’s profile</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="#">Home</a></li>
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
                        <form method="POST" action="/account/{{ Auth::user()->id }}" enctype="multipart/form-data" class="user">
                            <h4>Profile details</h4>
                            @csrf
                            <div class="row">
                                <div class="col-md-4 form-it">
                                    <a href="#"><img src="/storage/{{ Auth::user()->avatar }}" width="120"  alt=""><br></a><br>
                                    <input type="file" name="avatar" value="{{ old('avatar') }}">
                                </div>
                                <div class="col-md-8 form-it">
                                    <label>Username</label>
                                    <input type="text" name="username" value="{{ Auth::user()->username }}" placeholder="Prince Dev" required>

                                    <label>Email Address</label>
                                    <input type="email" name="email " value="{{ Auth::user()->email }}" placeholder="enter your email" required>

                                    <label>First Name</label>
                                    <input type="text" name="firstName" value="{{ Auth::user()->firstName }}" placeholder="enter your first name" required>

                                    <label>Last Name</label>
                                    <input type="text" name="lastName" value="{{ Auth::user()->lastName }}" placeholder="enter your last name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-8">
                                    <input class="submit" type="submit" value="Update profile">
                                </div>
                                <div class="col-md-2">
                                </div>
                            </div>
                        </form>
                        <form action="#" class="password">
                            <h4>02. Change password</h4>
                            <div class="row">
                                <div class="col-md-6 form-it">
                                    <label>Old Password</label>
                                    <input type="text" placeholder="**********">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-it">
                                    <label>New Password</label>
                                    <input type="text" placeholder="***************">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-it">
                                    <label>Confirm New Password</label>
                                    <input type="text" placeholder="*************** ">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <input class="submit" type="submit" value="change">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
