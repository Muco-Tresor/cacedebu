@extends('front.layouts.app', ['title' => $news->title])


@section('banner')
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center  intro">
                {{ $news->title }}
            </h1>

            <br><br>

        </div>
    </div>
    
    <div class="parallax"><img src="{{ asset($news->image) }}" alt="{{ $news->title }}"></div>
@stop


@section('content')
    <h2>{{ $news->title }}</h2>
    <h6 class="date">Updated at: {{ date("d - M - Y  H:ia", strtotime($news->updated_at)) }}</h6>

    <p class="news_post-text">{{ $news->body }}</p>
    <div class="divider"></div>

    <h3>Comments</h3>
    
    {!! Form::open() !!}
        <div class="input-field col s6">
            <i class="fa fa-pencil"></i>
            {{Form::textarea('comment', null, ['class' => 'materialize-textarea']) }}
            {{ Form::label('write your comment here') }}
        </div>

        {{ Form::submit('Send', ['class' => 'btn green']) }}
    {!! Form::close() !!}
    
@stop

