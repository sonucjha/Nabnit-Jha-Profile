@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h1 class="text-center mb-0">Upload New File</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('cv_uploads.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="cv_file" class="form-label">Cv_File</label>
                        <input type="file" name="cv_file" id="cv_file" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- File Preview Div -->
        <div class="mt-4">
            <h3 class="text-center">Preview File</h3>
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <div  id="preview-file" class="img-fluid" style="max-height: 100px;">
                </div>
            </div>
        </div>
    </div>
@endsection


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const imageInput = document.getElementById('cv_file');
            const previewImage = document.getElementById('preview-file');

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
