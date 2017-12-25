@extends('front.layouts.app', ['title' => 'Home'])


@section('banner')
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center  intro">
                Welcome To {{ config('app.name') }}
            </h1>
            <div class="row center">
                <h5 class="header col s12 light intro">
                    At CACEDEBU we like to hear developpment <br>
                    Help people grow their ideas
                </h5>
            </div>

            <br><br>

        </div>
    </div>
    
    <div class="parallax"><img src="{{ asset('images/posts/1.jpg') }}" alt="Unsplashed background img 1"></div>
@stop


@section('content')
<section class="content">

        <h3 class="center">Latest Meet-up</h3><br><br>
        
        <div class="row">
            <div class="col l4 m4 s12">
                <video src="{{ asset('videos/1.mp4') }}" controls class="responsive-video" poster="{{ asset('images/posts/poster_bulma.png') }}"></video>
            </div>

            <div class="col l4 m4 s12">
                <video src="{{ asset('videos/2.mp4') }}" controls class="responsive-video"></video>
            </div>

            <div class="col l4 m4 s12">
                <video src="{{ asset('videos/3.mp4') }}" controls class="responsive-video"></video>
            </div>

        </div>
            <a href="#" class="t_btn green">Watch More</a>

        <h3 class="center">Latest News</h3>

        <div class="row">
            
            @foreach ($news as $news)
                <div class="col l4 m4 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset($news->image) }}" alt="{{ $news->title }}" title="{{ $news->title }}">
                            <a class="btn-floating halfway-fab waves-effect waves-light green" href="{{ route('news.post', $news->id) }}" title="{{ $news->title }}">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                        <div class="card-content">
                            <span class="card-title">{{ $news->title }}</span>
                            <p>{{ $news->body_description }}...</p>
                            <div class="divider"></div>
                        </div>
                    </div>
                </div>   
            @endforeach
        </div> 
        <a href="{{ route('news.index') }}" class="t_btn green">View more</a>
</section>


@stop
