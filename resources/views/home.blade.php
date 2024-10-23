@extends('layouts.app')

@section('content')
<div class="fullscreen-cover">
    <div class="container video-message-container">
        <h2>Now available</h2>
        <h3>Lamborghini Countach LPI 800-4</h3>
        <a href="/products"><button class="btn">Order now</button></a>
    </div>
    
</div>
<div class="fullscreen-video-wrapper">
    <div class="fullscreen-video-container" style="background-image: url('{{ asset('/media/gifs/homepage-animation.gif') }}');">
        <iframe src="https://www.youtube.com/embed/bn2cgd0A3no?si=qq2tySb_PHg1V8Aa&autoplay=1&mute=1&loop=1&playlist=bn2cgd0A3no"
            class="fullscreen-video"
            frameborder="0" 
            title="YouTube video player" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" 
        />
    </div>
</div>
@endsection