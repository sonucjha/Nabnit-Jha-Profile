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
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" value="{{ $cvUpload->email }}" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="cv_file" class="form-label">Upload CV</label>
                <input type="file" id="cv_file" name="cv_file" class="form-control">
            </div>
            
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
