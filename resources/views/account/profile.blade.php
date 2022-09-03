<x-layout>

    <div class="hero user-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <x-profile-name />
                        <ul class="breadcumb">
                            <li class="active"><a href="/">Home</a></li>
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

                        <h4>Profile details</h4>
                        @csrf
                        <div class="row">
                            <form method="POST" action="/account/{{ auth()->user()->id }}" enctype="multipart/form-data">
                                <div class="col-md-4 ">
                                    <img id="blah" src="{{ auth()->user()->avatar? '/storage/'.auth()->user()->avatar:'https://randomuser.me/api/portraits/women/81.jpg'}}" width="120" alt=""><br></a><br>
                                    @csrf
                                    <label for="input" id="imageUpload">
                                        <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.4345 15.0645C19.4345 15.5114 19.257 15.9401 18.9409 16.2561C18.6249 16.5721 18.1963 16.7497 17.7493 16.7497H2.58265C2.13571 16.7497 1.70707 16.5721 1.39104 16.2561C1.07501 15.9401 0.897461 15.5114 0.897461 15.0645V5.79597C0.897461 5.34903 1.07501 4.9204 1.39104 4.60436C1.70707 4.28833 2.13571 4.11079 2.58265 4.11079H5.95302L7.6382 1.58301H12.6938L14.3789 4.11079H17.7493C18.1963 4.11079 18.6249 4.28833 18.9409 4.60436C19.257 4.9204 19.4345 5.34903 19.4345 5.79597V15.0645Z" stroke="white" stroke-width="1.68519" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.1665 13.3794C12.0279 13.3794 13.5369 11.8704 13.5369 10.009C13.5369 8.14764 12.0279 6.63867 10.1665 6.63867C8.30511 6.63867 6.79614 8.14764 6.79614 10.009C6.79614 11.8704 8.30511 13.3794 10.1665 13.3794Z" stroke="white" stroke-width="1.68519" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </label>
                                    <input style="display:none;" type="file" name="avatar" id="input" onchange="readURL(this);">
                                    <button style="display:none;" id="save" type="submit" class="submit">Save</button>
                                </div>
                            </form>
                            <form method="POST" action="/account/{{ auth()->user()->id }}" class="user">
                                <div class="col-md-8 form-it">
                                    <label>Username</label>
                                    <input type="text" name="username" value="{{ auth()->user()->username }}" placeholder="Prince Dev" required>

                                    <label>Email Address</label>
                                    <input type="email" name="email " value="{{ auth()->user()->email }}" placeholder="enter your email" required>

                                    <label>First Name</label>
                                    <input type="text" name="firstName" value="{{ auth()->user()->firstName }}" placeholder="enter your first name" required>

                                    <label>Last Name</label>
                                    <input type="text" name="lastName" value="{{ auth()->user()->lastName }}" placeholder="enter your last name" required>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(130)
                    .height(130);
            };
            reader.readAsDataURL(input.files[0]);
        }
        var imageUpload = document.getElementById("imageUpload");
        var imageSave = document.getElementById("save");
        if (imageSave.style.display === "none") {
            imageSave.style.display = "inline-flex";
            imageUpload.style.display = "none";
        } else {
            imageSave.style.display = "none";
        }
    }
</script>
