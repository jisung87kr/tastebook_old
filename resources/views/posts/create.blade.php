@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="my-3">게시글 작성</h1>
    <form action="{{route('posts.store')}}" method="POST">
        @method('POST')
        @csrf
        @include('posts.post-form')
    </form>
</div>
@endsection