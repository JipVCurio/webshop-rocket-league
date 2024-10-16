<div class="card product-card">
    <div class="card-header">
        <h5 class="card-title">{{$product->name}}</h5>
    </div>
    <div class="card-img">
        <img src="{{ asset($product->imageUrl ?? '/uploads/no-image.png') }}">
    </div>
    <div class="card-body">
        <p>{{$product->description}}</p>
        <button class="btn btn-primary float-right"><a href="#"><i class="fa-solid fa-cart-shopping"></i> €{{$product->price}}</a></button>
    </div>
</div>