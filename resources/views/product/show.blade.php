<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            height: 1500px;
            width: 100%;
            margin: 0;
            padding: 0;
            background-image: url("{{ $product->image }}");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-color: rgba(0,0,0, .9);
            background-blend-mode: darken;
        }

        #image-box {
            width: 300px;
            height: 300px;
            margin: 50px auto;
            border-radius: 10px;
        }

        #image-box img {
            width: 100%;
            border-radius: 10px;
        }

        .content {
            text-align: center;
            color:#efefef;
            font-family: 'Circular-Loom'
        }

        #buy-now {
            width: 200px;
            margin: 0 auto;
            display: block;
            text-decoration: none;
            color:#fff;
            background-color: #1f83b8;
            border-radius: 50px;
            font-size: 25px;
            padding: 5px 40px;
            box-shadow: 0 1px 5px 0px #ccc;
        }

        #buy-now:hover {
            text-decoration: none;
            background-color: #115d86;
        }

        #stores img {
            width: 80px;
            height: 80px;
            margin: 20px;
        }

        #stores {
            display: block;
        }

        .similar-products-img img {
            border-radius: 10px 10px 0 0;
        }

        .similar-products-img {
            height: 140px;
            overflow: hidden;
        }

        #similar-products .col-md-2 h6 {
            margin-top: 10px;
        }

        #similar-products .col-md-2 {
            margin:20px;
            background-color: #000;
            padding: 0;
            border-radius: 0 0 10px 10px;
        }

        #store-info {
            width: 150px;
            position: fixed;
            top: 0;
            left: 0;
            margin: 5px;
        }
        #store-info #store-logo img {
            width: 40%;
            margin: 5px;
            border-radius: 50%;
        }

        #store-info ul {
            font-weight: normal;
            list-style-type: circle;
            text-align: left;
            font-size: 12px;
        }

        #store-info ul a {
            text-decoration: none;
            color: #69abd7;
        }

        #store-info ul a:hover {
            color: #38759e;
            padding-left: 3px;
            transition: 0.1s linear all;
        }
    </style>
</head>
<body>
    <div class="content justify-content-center text-center">
        <div id="store-info">
            <div id="store-logo">
                <img src="{{ $product->store->logo }}" />
            </div>
            <h6>{{ $product->store->name }}</h6>
            <ul class="m-0">
                <li>
                    <a href="#" onclick="document.getElementById('about').style.display='block'">About</a><br>
                    <p id="about" style="display: none">{{ $product->store->about }}</p>
                </li>
                <li><a href="//{{ $product->store->website }}">Website</a></li>
                <li><a href="//facebook.com/{{ $product->store->facebook }}">Facebook</a></li>
                <li><a href="//instagram.com/{{ $product->store->instagram }}">Instagram</a></li>
                <li><a href="//twitter.com/{{ $product->store->twitter }}">Twitter</a></li>
                <li><a href="//{{ $product->store->terms }}">Terms</a></li>
            </ul>
        </div>

        <div id="image-box">
            <img src="{{ $product->image }}" />
        </div>

        <h1>{{ $product->name }}</h1>

        <p style="width: 50%; margin: 0 auto;">{{ $product->primary_description }}</p>

        <h1 class="mt-4 mb-4"><em>&#8358;{{ number_format($product->amount) }}</em></h1>

        <a href="" id="buy-now">Buy Now</a><br>

        <small>Also available on</small>

        <div id="stores">
            <a href="//{{ $product->jumia_product_link }}" class="">
                <img src="/public/jumia_btn.png" title="Buy on Jumia"/>
            </a>

            <a href="//{{ $product->konga_product_link }}" class="">
                <img src="/public/konga_btn.png" title="Buy on Konga"/>
            </a>
        </div>

<!--      <div class="clearfix"></div>
        <hr>
        <h6 class="mt-5">You may be interested in these too...</h6>
        <div class="row m-0 m-auto" id="similar-products">
            <div class="col-md-2">
                <div class="similar-products-img">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($product->image) }}" style="width:100%;">
                </div>
                <h6>{{ $product->name }}</h6>
            </div>

            <div class="col-md-2">
                <div class="similar-products-img">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($product->image) }}" style="width:100%;">
                </div>
                <h6>{{ $product->name }}</h6>
            </div>

            <div class="col-md-2">
                <div class="similar-products-img">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($product->image) }}" style="width:100%;">
                </div>
                <h6>{{ $product->name }}</h6>
            </div>

            <div class="col-md-2">
                <div class="similar-products-img">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($product->image) }}" style="width:100%;">
                </div>
                <h6>{{ $product->name }}</h6>
            </div>

            <div class="col-md-2">
                <div class="similar-products-img">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($product->image) }}" style="width:100%;">
                </div>
                <h6>{{ $product->name }}</h6>
            </div>
        </div> -->
    </div>

</body>
</html>
