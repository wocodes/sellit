@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-header h5" style="text-align:center;background-color:#1f596a;color:#fff;">{{ __('Welcome to Sellit') }}</div>

                <div class="card-body">
                    @include('includes/flash')

                    <h4 class="m-0 mb-2">Get Started Immediately</h4>
                    <h6>Create Your Store</h6>
                    <hr>

                        <div class="text-left">
                            <form method="POST" action="{{ route('store.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('About') }}</label>

                                    <div class="col-md-6">
                                        <textarea id="about" class="form-control @error('about') is-invalid @enderror" name="about" autocomplete="about">{{ old('about') }}</textarea>

                                        @error('about')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Logo') }}</label>

                                    <div class="col-md-6">
                                        <input type="file" id="image" class="form-control @error('logo') is-invalid @enderror" name="logo" >

                                        @error('logo')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Terms') }}</label>

                                    <div class="col-md-6">
                                        <textarea id="terms" class="form-control @error('terms') is-invalid @enderror" name="terms" autocomplete="terms">{{ old('terms') }}</textarea>

                                        @error('terms')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-3 col-form-label text-md-right"></label>

                                    <div class="col-md-6 row">
                                        <div class="col-md-6">
                                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone" placeholder="Phone Number">

                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="email" placeholder="Email" value="{{ old('email') }}">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <input id="website" type="text" class="form-control @error('website') is-invalid @enderror" name="website" autocomplete="website" placeholder="Website" value="{{ old('website') }}">

                                            @error('website')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <input id="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" autocomplete="facebook" placeholder="Facebook" value="{{ old('facebook') }}">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <input id="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" autocomplete="instagram" placeholder="Instagram" value="{{ old('instagram') }}">

                                            @error('instagram')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <input id="twitter" type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" autocomplete="twitter" placeholder="Twitter" value="{{ old('twitter') }}">

                                            @error('twitter')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-3">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Save & Publish') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
