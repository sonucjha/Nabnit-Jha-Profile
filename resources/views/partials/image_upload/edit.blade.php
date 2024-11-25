@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h1 class="text-center">Edit Image</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('image_upload.update', $imageUpload->id) }}" method="POST"
                    enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                        <div class="mt-2">
                            <img id="imagePreview" 
                                 src="{{ asset('storage/' . $imageUpload->image) }}" 
                                 alt="{{ $imageUpload->type }}" 
                                 class="img-thumbnail" 
                                 width="150">
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" name="type" value="{{ $imageUpload->type }}" class="form-control"
                            id="type" required>
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

<script>
      // Ensure the script runs after the DOM is loaded
    document.addEventListener("DOMContentLoaded", function () {
        const imageInput = document.getElementById('image');
        const imagePreview = document.getElementById('imagePreview');

        if (imageInput) {
            imageInput.addEventListener('change', function(event) {
                const file = event.target.files[0]; // Get the uploaded file
                if (file) {
                    const reader = new FileReader(); // Create a FileReader to read the file
                    reader.onload = function(e) {
                        // Update the src of the image preview with the file data
                        imagePreview.src = e.target.result;
                    };
                    reader.readAsDataURL(file); // Read the file as a Data URL
                } else {
                    console.log("No file selected");
                }
            });
        } else {
            console.error("Image input element not found");
        }
    });

</script>
