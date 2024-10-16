@extends('layouts.app')

@section('content')
<div class="products-container">
    @foreach ($products as $product)
        <x-product-card :product="$product"/>
    @endforeach
</div>
@endsection