@extends('base')

@section('title', 'My Journey - Home')

@section('content')
    <section id="home" class="hero">
        <div class="image">
            <img src="{{ asset('images/background1.jpg') }}" height="100%" alt="meself">
        </div>
        <div class="hero-content">
            <div class="inner-hero-content">
                <h1>Welcome to My Journey</h1>
                <p>Exploring My Life's Adventures One Step at a Time</p>
                <a href="#journey" class="cta-button">Explore My Story</a>
            </div>
        </div>
    </section>

    <section id="journey" class="journey">
        <h2>My Life Journey<br> <span style="font-size: 11px;" class="subtitle">Fast foward to 2018 🙂</span></h2>
        <div class="journey-container">
            @foreach($journeyItems as $item)
                <div class="journey-item">
                    <div class="journey-content">
                        <h3>{{ $item['year'] }}</h3>
                        <p>{{ $item['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection