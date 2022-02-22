@extends('layouts.layout', ['title' => 'Редактирование поста "' . $post->short_title . '"'])

@section('content')

  <form action="{{ route('post.update', ['id' => $post->post_id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <h3>Редактировать пост "{{$post->title}}"</h3>
    @include('posts.parts.form')
    <input type="submit" value="Применить изменения" class="btn btn-outline-success">
  </form>

@endsection