@extends('layouts.app')

@section('content')
<div class="container">
    <div class="product-display-container">
        <h2>{{$product->name}}</h2>
        <div class="product-display-image-container">
            <img src={{$product->imageUrl}}>
        </div>
        <div class="product-details-container">
            <h3>{{$product->rarity}} {{$product->type}}</h3>
            <p>{{$product->description}}</p>
            <h4>€{{$product->price}}</h4>
            <a><button class="btn">Add to cart</button></a>
        </div>
    </div>
</div>
@endsection