@extends('layouts.main')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>id</th>
            <th>제목</th>
            <th>작성일</th>
            <th>작성자</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><a href="{{route('posts.show', ['post' => $post->id])}}">{{$post->subject}}</a></td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->user->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$posts->links()}}
</div>
@endsection