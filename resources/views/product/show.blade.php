@extends('layouts.app')

@section('content')
<div class="product-show-container">
    <div>
        <div>
            <h1>{{$product->name}}</h1>
        </div>
        <div class="product-img-container">
            <img src="{{$product->imageUrl ?? '/uploads/no-image.png'}}">
        </div>
    </div>
</div>
@endsection