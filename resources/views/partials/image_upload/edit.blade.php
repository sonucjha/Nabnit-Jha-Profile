@extends('layouts.admin')

@section('content')
    <h1>Edit Image</h1>
    <form action="{{ route('image_upload.update', $imageUpload->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="image">Image:</label>
            <input type="file" name="image">
            <img src="{{ asset('storage/' . $imageUpload->image) }}" alt="{{ $imageUpload->type }}" width="100">
        </div>
        <div>
            <label for="type">Type:</label>
            <input type="text" name="type" value="{{ $imageUpload->type }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
