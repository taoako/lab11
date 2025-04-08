@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}" required>
        
        <label for="body">Body</label>
        <textarea name="body" id="body" required>{{ $post->body }}</textarea>
        
        <button type="submit">Update Post</button>
    </form>
@endsection
