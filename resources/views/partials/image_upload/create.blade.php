@extends('layouts.admin')

@section('content')
    <h1>Upload New Image</h1>
    <form action="{{ route('image_upload.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="image">Image:</label>
            <input type="file" name="image" required>
        </div>
        <div>
            <label for="type">Type:</label>
            <input type="text" name="type" required>
        </div>
        <button type="submit">Upload</button>
    </form>
@endsection
