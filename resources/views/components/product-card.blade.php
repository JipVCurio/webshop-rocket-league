<div class="card product-card">
    <a href="{{route('products.show', ['id' => $product->id])}}" class="product-card-redirect-link">
        <div class="card-header">
            <h5 class="card-title">{{$product->name}}</h5>
        </div>
        <div class="card-img-container">
            <img src="{{ asset($product->imageUrl ?? '/uploads/no-image.png') }}">
        </div>
        <div class="card-body">
            <p>{{$product->description}}</p>
                <a href="#">
                    <button class="btn btn-primary">
                        €{{$product->price}}
                    </button>
                </a>
            @IsAdmin
                <div class="align-crud-buttons">
                    <a class="update-link" href={{route('products.edit', ['id' => $product->id])}}>
                        <button class="btn btn-info">
                            Update
                        </button>
                    </a>
                    <form method="post" action={{route('products.destroy')}}>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">
                            <a>
                                Delete product
                            </a>
                        </button>
                        <input name="id" type="number" value={{$product->id}} hidden/>
                    </form>
                </div>
            @endIsAdmin
        </div>
    </a>
</div>