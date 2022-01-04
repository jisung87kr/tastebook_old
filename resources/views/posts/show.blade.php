@extends('layouts.main')

@section('content')
<div class="container">
    <div class="my-3">
        <h1>{{$post->subject}}</h1>
        <small>{{ $post->updated_at->diffForHumans() }}</small>
        <hr>
    </div>
    <div class="mb-3">
        <div>{{$post->content}}</div>
    </div>
    <div class="text-end">
        @can('update', $post))
        <a href="{{route('posts.edit', ['post' => $post->id ])}}" class="btn btn-secondary">수정</a>
        <a href="{{route('posts.destroy', ['post' => $post->id ])}}" class="btn btn-secondary" onclick="event.preventDefault();
        document.getElementById('form-delete').submit();
        ;">삭제</a>
        <form action="{{route('posts.destroy', ['post' => $post->id ])}}" id="form-delete" method="POST" style="display: none">
            @method('DELETE')
            @csrf
        </form>
        @endif
        <a href="{{route('posts.index')}}" class="btn btn-primary">목록</a>
    </div>
</div>
@endsection