@extends('layouts.app')
@section('title', 'Edit Post')
@section('content')
    <form action="{{ route('posts.update', $post['id']) }}" method="POST">

        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" value="{{ $post['title'] }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3">{{ $post['description'] }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Post Creator</label>
            <select name="post_creator" class="form-control">
                <option value="1">Ahmed</option>
                <option value="2">Mohamed</option>
            </select>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>

@endsection
