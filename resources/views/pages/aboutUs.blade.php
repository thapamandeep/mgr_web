@extends('layout.app')

@section('content')

<section class="about-section">

    <div class="container">

        <!-- Image -->
        <div class="about-image" data-animation="fadeInLeft">
            <img src="{{ asset('storage/album/'.$about->image) }}" alt="About Us">
        </div>

        <!-- Content -->
        <div class="about-content" data-animation="fadeInRight">

            <h2>{{$about->title}}</h2>

            <p>
            {{$about->description}}
            </p>

            <a href="#" class="btn">Learn More</a>

        </div>

    </div>

</section>

@endsection