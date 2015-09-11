@extends('template')

@section('content')
    <h1>Blog</h1>

    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>

        <h4>Comentários</h4>
        @foreach($post->comments as $comment)
            <b>Name: </b> {{$comment->name}}
            <b>Comentário: </b> {{$comment->comment}}
        @endforeach
        <hr />
    @endforeach


@endsection