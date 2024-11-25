@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="my-4">Upload CV</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('cv_uploads.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="cv_file" class="form-label">Upload CV</label>
                        <input type="file" name="cv_file" id="cv_file" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
@endsection
