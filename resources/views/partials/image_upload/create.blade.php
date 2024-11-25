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

        <!-- Image Preview Div -->
        <div class="mt-4">
            <h3 class="text-center">Preview Image</h3>
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <img id="preview-image" src="#" alt="Image Preview" class="img-fluid" style="max-height: 300px; display: none;">
                </div>
            </div>
        </div>
    </div>
@endsection


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const imageInput = document.getElementById('image');
            const previewImage = document.getElementById('preview-image');

            imageInput.addEventListener('change', function () {
                const file = this.files[0]; // Get the selected file
                if (file) {
                    const reader = new FileReader(); // Initialize FileReader
                    reader.onload = function (e) {
                        previewImage.src = e.target.result; // Set image source to file result
                        previewImage.style.display = 'block'; // Display the image
                    };
                    reader.readAsDataURL(file); // Read the file as Data URL
                }
            });
        });
    </script>

