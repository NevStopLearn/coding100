@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center text-danger">更新博客</h3>
        <hr>
        @include('shared.error')
        <form action="{{ route('post.update',$post->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">

            <div class="form-group">
                <label for="title">标题：</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
            </div>

            <div class="form-group">
                <label for="body">内容：</label>
                @include('shared.ueditor')
            </div>

            <div class="form-group">
                <label for="published_at">发表时间：</label>
                <input type="date" name="published_at" class="form-control" id="published_at" value="{{ $post->published_at->toDateString() }}" >
            </div>

            <div class="form-group">
                <button type="submit">提交</button>
            </div>
        </form>
    </div>
    @endsection