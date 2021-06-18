
<div class="m-4" id="add_product_box">
    <h4 class="m-0 mb-2">Get Started Immediately</h4>
    <h6>By Selling Your First Product</h6>
    <hr>

    <div class="text-left">
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
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
                <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Description') }}</label>

                <div class="col-md-6">
                    <textarea id="primary_description" class="form-control @error('description') is-invalid @enderror" name="primary_description" value="{{ old('primary_description') }}" required autocomplete="primary_description"></textarea>

                    @error('primary_description')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Other Description') }}</label>

                <div class="col-md-6">
                    <textarea id="secondary_description" class="form-control @error('description') is-invalid @enderror" name="secondary_description" value="{{ old('secondary_description') }}" autocomplete="secondary_description"></textarea>

                    @error('secondary_description')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Amount') }}</label>

                <div class="col-md-6">
                    <input id="amount" type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" required autocomplete="amount">

                    @error('amount')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Testimonials') }}</label>

                <div class="col-md-6">
                    <textarea id="testimonials" class="form-control @error('testimonials') is-invalid @enderror" name="testimonials" value="{{ old('testimonials') }}" autocomplete="secondary_description"></textarea>

                    @error('testimonials')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Select Image') }}</label>

                <div class="col-md-6">
                    <input type="file" id="image" class="form-control @error('image') is-invalid @enderror" name="image" >

                    @error('image')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Product Link (Jumia)') }}</label>

                <div class="col-md-6">
                    <input id="jumia_product_link" type="text" class="form-control @error('jumia_product_link') is-invalid @enderror" name="jumia_product_link" value="{{ old('jumia_product_link') }}" required autocomplete="name" autofocus>

                    @error('jumia_product_link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Product Link (Konga)') }}</label>

                <div class="col-md-6">
                    <input id="konga_product_link" type="text" class="form-control @error('konga_product_link') is-invalid @enderror" name="konga_product_link" value="{{ old('konga_product_link') }}" required autocomplete="name" autofocus>

                    @error('konga_product_link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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
