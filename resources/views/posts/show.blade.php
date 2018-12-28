@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center text-danger">{{ $post->title }}</h3><hr>
        <span class="pull-left">{{ $post->author->name }}</span>
        <span class="pull-right">{{ $post->published_at->diffForHumans() }}</span>
        <div class="clearfix"></div><hr>
        {!! $post->body !!}
        <div class="pull-left"><a href="{{ route('post.edit',$post->id) }}">修改博客</a></div>
        <div class="pull-right">
            <form action="{{ route('post.destroy',$post->id) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">

                <div class="form-group">
                    <button type="submit" class="btn btn-default">删除博客</button>
                </div>
            </form>
        </div>
    </div>
@endsection