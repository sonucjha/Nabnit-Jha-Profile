@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h1>Edit About Me</h1>
        <form action="{{ route('about_me.update', $aboutMe->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $aboutMe->title) }}">
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="5">{{ old('description', $aboutMe->description) }}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
