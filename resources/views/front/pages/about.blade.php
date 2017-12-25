@extends('front.layouts.app', ['title' => 'About'])

@section('banner')
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center  intro">
                About {{ config('app.name') }}
            </h1>

            <br><br>

        </div>
    </div>
    
    <div class="parallax"><img src="{{ asset('images/posts/1.jpg') }}" alt="Unsplashed background img 1"></div>
@stop
