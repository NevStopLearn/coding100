@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="text-center text-warning"><span style="font-size: 25px">博客列表</span> <span class="float-right">总计：{{ $posts->total() }}</span></div>
        <hr>
        @foreach($posts as $post)
            <div class="text-center">
                <a href="{{ route('post.show',$post->id) }}">{{ $post->title }}</a>
                <div>{{ $post->published_at->diffForHumans() }}</div>
            </div>
            <hr>
        @endforeach
        <div class="text-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection