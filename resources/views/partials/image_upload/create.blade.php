@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h1 class="text-center mb-0">Upload New Image</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('image_upload.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" name="type" id="type" class="form-control" placeholder="Enter type" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
