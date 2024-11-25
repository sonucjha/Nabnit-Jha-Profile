@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Image List</h1>
    <a href="{{ route('image_upload.create') }}" class="btn btn-primary mb-3">Add New Image</a>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($images as $image)
                    <tr>
                        <td>{{ $image->id }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $image->type }}" width="100" class="img-thumbnail">
                        </td>
                        <td>{{ $image->type }}</td>
                        <td>
                            <a href="{{ route('image_upload.edit', $image->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('image_upload.destroy', $image->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this image?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
