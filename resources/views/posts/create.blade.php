@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
        
        <label for="body">Body</label>
        <textarea name="body" id="body" required></textarea>
        
        <button type="submit">Create Post</button>
    </form>
@endsection
