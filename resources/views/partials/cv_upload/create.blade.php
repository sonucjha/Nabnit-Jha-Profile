@extends('layouts.admin')

@section('content')
    <h1>Upload CV</h1>
    <form action="{{ route('cv_uploads.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="Your Email">
        <input type="file" name="cv_file">
        <button type="submit">Upload</button>
    </form>
@endsection
