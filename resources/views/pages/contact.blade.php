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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-style-1 user-pro" action="#">
                        <form action="#" class="user">
                            @csrf
                            <h4>Leave Us A Message</h4>
                            <div class="row">
                                <div class="col-md-6 form-it">
                                    <label>Names</label>
                                    <input type="text" name="names" value="{{ old('names') }}" placeholder="edwardkennedy" required>
                                    @error('names')
                                    <p class="text-danger">{{ $description }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-it">
                                    <label>Email Address</label>
                                    <input type="text" name="email" value="{{ old('email') }}" placeholder="edward@kennedy.com" required>
                                    @error('email')
                                    <p class="text-danger">{{ $description }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-it">
                                    <label>Message</label>
                                    <textarea placeholder="Write something here" rows="40" cols="50" name="detail" value="{{ old('detail') }}" required></textarea>
                                    @error('detail')
                                    <p class="text-danger">{{ $description }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <input class="submit" type="submit" value="Send">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
