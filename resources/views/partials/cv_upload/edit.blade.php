@extends('layouts.admin')

@section('content')
    <h1>Edit CV</h1>
    <form action="{{ route('cv_uploads.update', $cvUpload->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $cvUpload->name }}">
        <input type="email" name="email" value="{{ $cvUpload->email }}">
        <input type="file" name="cv_file">
        <button type="submit">Update</button>
    </form>
@endsection
