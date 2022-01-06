@extends('layouts.main')

@section('content')
<div class="container">
    <table class="table table-striped">
        <colgroup>
            <col width="100px">
            <col width="*">
            <col width="200px">
            <col width="200px">
        </colgroup>
        <thead>
        <tr>
            <th>
                <x-sort name="번호" field="id" :sort="request()->input('id')" />
            </th>
            <th>제목</th>
            <th>
                <x-sort name="작성일" field="created_at" :sort="request()->input('created_at')" />
            </th>
            <th>
                <x-sort name="작성자" field="name" :sort="request()->input('name')" />
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><a href="{{route('posts.show', ['post' => $post->id])}}">{{$post->subject}}</a></td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$posts->appends(request()->input())->links()}}
</div>
@endsection