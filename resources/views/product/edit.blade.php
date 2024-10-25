@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-container">
        <h2>New product</h2>
        <form action={{route('products.update', ['id' => $product->id])}} method="post" class="product-form" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label>Name</label>
                <input value={{$product->name}} name="name" class="form-control" placeholder="name"/>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Type</label>
                <select selected={{$product->type}} name="type" class="form-control">
                    <option value="body">Body</option>
                    <option value="decal">Decal</option>
                    <option value="paint">Paint finish</option>
                    <option value="wheels">Wheels</option>
                    <option value="rocket-boost">Rocket Boost</option>
                    <option value="topper">topper</option>
                    <option value="antenna">Antenna</option>
                    <option value="trail">Trail</option>
                </select>
            </div>
            <div class="form-group">
                <label>Rarity</label>
                <select selected={{$product->rarity}} name="rarity" class="form-control">
                    <option value="base">Base</option>
                    <option value="sport">Sport</option>
                    <option value="special">Special</option>
                    <option value="deluxe">Deluxe</option>
                    <option value="luxury">Luxury</option>
                    <option value="import">Import</option>
                    <option value="exotic">Exotic</option>
                    <option value="black-market">Black market</option>
                    <option value="premium">Premium</option>
                    <option value="legacy">Legacy</option>
                </select>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input value={{$product->price}} name="price" class="form-control" placeholder="price"/>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description">{{$product->description}}</textarea>
            </div>
            <input name="id" value={{$product->id}} hidden/>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection