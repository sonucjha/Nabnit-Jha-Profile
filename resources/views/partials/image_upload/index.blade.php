@extends('layouts.admin')

@section('content')
    <h1>Image List</h1>
    <a href="{{ route('image_upload.create') }}">Add New Image</a>
    <table>
        <thead>
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
                    <td><img src="{{ asset('storage/' . $image->image) }}" alt="{{ $image->type }}" width="100"></td>
                    <td>{{ $image->type }}</td>
                    <td>
                        <a href="{{ route('image_upload.edit', $image->id) }}">Edit</a>
                        <form action="{{ route('image_upload.destroy', $image->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
