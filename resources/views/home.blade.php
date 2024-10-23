@extends('layouts.app')

@section('content')
<div class="fullscreen-video-wrapper">
    <div class="fullscreen-video-container" style="background-image: url('{{ asset('/media/gifs/homepage-animation.gif') }}');">
        <iframe src="https://www.youtube.com/embed/FODkiJMmals?si=rnVOLeN1KbOhh3h8&autoplay=1&mute=1&loop=1&playlist=FODkiJMmals"
            class="fullscreen-video"
            frameborder="0" 
            title="YouTube video player" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" 
        />
    </div>
</div>
@endsection