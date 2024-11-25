@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h1 class="text-center">Edit Image</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('image_upload.update', $imageUpload->id) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $imageUpload->image) }}" alt="{{ $imageUpload->type }}" class="img-thumbnail" width="150">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="type" value="{{ $imageUpload->type }}" class="form-control" id="type" required>
                    <div class="invalid-feedback">
                        Please provide a valid type.
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
