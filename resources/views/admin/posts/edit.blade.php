@extends('template')

@section('content')
    <h1>Edit Post</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::model($post, ['route'=>['admin.posts.update', $post->id], 'method'=>'put']) !!}
    @include('admin.posts._form')
    <div class="form-group">
        {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection