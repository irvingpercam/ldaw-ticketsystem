@extends('layout')
@section('title', 'Home')
@section('content')
    <h1>{{ __('Home') }}</h1>
    <div class="container my-4">
        <p class="font-weight-bold">To set or to stop autoplay in Bootstrap carousel you can use data attributes or JavaScript code.</p>
    
        <p><strong>Detailed documentation and more examples of Bootstrap grid you can find in our <a href="https://mdbootstrap.com/docs/jquery/javascript/carousel/"
                target="_blank">Bootstrap Carousel Docs</a>.</p>
    
        <p><strong class="font-weigt-bold">Note: </strong>Autoplay for the carousel is turned on from default.</p>
    
        <hr class="my-4">
    
        <h2 class="my-5 h2">Basic carousel - autoplay turned on from default</h2>
    
        <div id="carouselExample1" class="carousel slide z-depth-1-half" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg" alt="Third slide">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection