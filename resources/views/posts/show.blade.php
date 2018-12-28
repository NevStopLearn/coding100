@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center text-warning">{{ $post->title }}</h3><hr>
        <span class="pull-left">{{ $post->author->name }}</span>
        <span class="pull-right">{{ $post->published_at->diffForHumans() }}</span>
        <div class="clearfix"></div><hr>
        {!! $post->body !!}


    </div>
@endsection