<div class="card product-card">
    <a href="{{route('products.show', ['id' => $product->id])}}" class="product-card-link">
        <div class="card-header">
            <h5 class="card-title">{{$product->name}}</h5>
        </div>
        <div class="card-img">
            <img src="{{ asset($product->imageUrl ?? '/uploads/no-image.png') }}">
        </div>
        <div class="card-body">
            <p>{{$product->description}}</p>
            <button class="btn btn-primary">
                <a href="">
                    €{{$product->price}}
                </a>
            </button>
        </div>
    </a>
</div>