@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-header h3" style="text-align:center;background-color:#1f596a;color:#fff;">{{ __('Welcome to Sellit') }}</div>

                <div class="card-body m-0 p-0">
                    <div class="row no-gutters">
                        <h5 class="col-md-6 text-center bg-primary p-2">
                            <a class="text-white" href="#" id="add-product">Create New Product</a>
                        </h5>
                        <h5 href="#" class="col-md-6 text-center bg-success p-2">
                            <a class="text-white" href="#" id="show-products">Products List</a>
                        </h5>
                    </div>

                    @include('includes.flash')

                    @include('includes.new_product')

                    @include('includes.show_products')
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let addProductBtn = document.getElementById('add-product');
    addProductBtn.addEventListener('click', function(e) {
        e.preventDefault();

        let productsBox = document.getElementById('products_box');
        let addProductsBox = document.getElementById('add_product_box');

        addProductsBox.style.display = 'block';
        productsBox.style.display = 'none';
    })

    let showProductBtn = document.getElementById('show-products');
    showProductBtn.addEventListener('click', function(e) {
        e.preventDefault();

        let productsBox = document.getElementById('products_box');
        let addProductsBox = document.getElementById('add_product_box');

        addProductsBox.style.display = 'none';
        productsBox.style.display = 'block';
    })
</script>
@endsection
