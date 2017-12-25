@extends('front.layouts.app', ['title' => 'News'])


@section('banner')
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center  intro">
                All News Of {{ config('app.name') }}
            </h1>

            <br><br>

        </div>
    </div>
    
    <div class="parallax"><img src="{{ asset('images/posts/1.jpg') }}" alt="Unsplashed background img 1"></div>
@stop


@section('content')
    
    @foreach ($news as $news)
        <div class="row">
            <div class="col l12 m12 s12">
                <h4>{{ $news->title }}</h4>

                <div class="row">
                    <div class="col l8 m6 s12">
                        {{ $news->body_description }}
                    </div>

                    <div class="col l4 m6 s12">
                        <img src="{{ asset($news->image) }}" alt="{{ $news->title }}" title="{{ $news->title }}" class="responsive-img">
                        <br><br>
                        <a class="t_btn green waves-effect waves-light" href="{{ route('news.post', $news->id) }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    
@stop

