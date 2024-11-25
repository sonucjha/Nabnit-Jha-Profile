@extends('layouts.admin')

@section('content')
    <h1>CV Uploads</h1>
    <a href="{{ route('cv_uploads.create') }}">Upload New CV</a>
    <ul>
        @foreach($cvUploads as $cv)
            <li>
                {{ $cv->name }} - <a href="{{ asset('storage/' . $cv->cv_file) }}" target="_blank">Download</a>
                <a href="{{ route('cv_uploads.edit', $cv->id) }}">Edit</a>
            </li>
        @endforeach
    </ul>
@endsection
