<div class="p-4" style="display:none" id="products_box">
    <div class="row">
        @foreach($products as $product)
                <div class="col-md-1">
                    <div style="border:1px solid #efefef;border-radius:5px;width:70px;height:70px;padding:5px;">
                        <img alt="{{ $product->name }} Image" src="{{ $product->image }}" style="width:100%;border-radius:5px;" />
                    </div>
                </div>
                <div class="col-md-7">
                    <h5 class="m-0">
                        <a href="{{ $product->link }}">{{ $product->name }}</a>
                    </h5>
                    <p class="m-0">
                        {{ $product->primary_description }}<br>
                        <small>{{ $product->secondary_description }}</small>
                    </p>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li><strong>Viewed: 0</strong></li>
                        <li><strong>Sold: 0</strong></li>
                    </ul>
                </div>
        @endforeach
    </div>
</div>
