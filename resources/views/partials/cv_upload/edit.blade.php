@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Edit CV</h1>
        <form action="{{ route('cv_uploads.update', $cvUpload->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" value="{{ $cvUpload->name }}" class="form-control">
            </div>

             <!-- File Upload Form -->
             <div class="mb-3">
                <label for="cv_file" class="form-label">Upload CV</label>
                <input class="form-control" type="file" name="cv_file" id="cv_file" src="{{ asset('storage/' . $cvUpload->cv_file) }}" 
                    accept="image/*,video/*,application/pdf" onchange="showPreview(event)">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

             <!-- Preview Section -->
             <div id="previewContainer" class="preview-container d-none">
                <h4>Preview:</h4>
                <img id="previewImage" class="preview-image d-none" alt="Image Preview">
                <video id="previewVideo" class="preview-video d-none" controls></video>
                <iframe id="previewPDF" class="preview-pdf d-none"></iframe>
                <p id="previewText" class="text-muted"></p>
            </div>
        </form>
    </div>
@endsection
<style>
    .preview-container {
        margin-top: 20px;
    }

    .preview-image,
    .preview-video,
    .preview-pdf {
        width: 100px;
        max-height: 100px;
        object-fit: contain;
    }

    .preview-pdf {
        border: 1px solid #ddd;
        height: 100px;
    }
</style>
<script>
    function showPreview(event) {
        const previewContainer = document.getElementById('previewContainer');
        const previewImage = document.getElementById('previewImage');
        const previewVideo = document.getElementById('previewVideo');
        const previewPDF = document.getElementById('previewPDF');
        const previewText = document.getElementById('previewText');

        // Reset the preview elements
        previewImage.classList.add('d-none');
        previewVideo.classList.add('d-none');
        previewPDF.classList.add('d-none');
        previewText.textContent = '';

        const file = event.target.files[0]; // Get the selected file

        if (file) {
            const fileURL = URL.createObjectURL(file); // Create a temporary URL for the file
            previewContainer.classList.remove('d-none'); // Show the preview container

            if (file.type.startsWith('image/')) {
                // If the file is an image
                previewImage.src = fileURL;
                previewImage.classList.remove('d-none');
            } else if (file.type.startsWith('video/')) {
                // If the file is a video
                previewVideo.src = fileURL;
                previewVideo.classList.remove('d-none');
            } else if (file.type === 'application/pdf') {
                // If the file is a PDF
                previewPDF.src = fileURL;
                previewPDF.classList.remove('d-none');
            } else {
                // If the file type is unsupported
                previewText.textContent = 'Preview not available for this file type.';
            }
        } else {
            // If no file is selected
            previewContainer.classList.add('d-none');
        }
    }
</script>
