@extends('template')

@section('content')
    <h1>Blog Admin</h1>
    <a href="{{ route('admin.posts.create') }}" class="btn btn-success">New Post</a>
    <br /><br />
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Action</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td><a href="{{ route('admin.posts.edit', ['id'=>$post->id]) }}" >{{ $post->title }}</a></td>
            <td><a href="{{ route('admin.posts.destroy', ['id'=>$post->id]) }}" class="btn btn-sm btn-danger">DELETE</a> </td>
        </tr>
        @endforeach
    </table>
    {!! $posts->render() !!}


@endsection