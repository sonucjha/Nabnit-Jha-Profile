@extends('layouts.admin')

@section('content')
    <h1>CV Uploads</h1>
    <a href="{{ route('cv_uploads.create') }}" class="btn btn-primary mb-3">Upload New CV</a>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>CV File</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cvUploads as $index => $cv)
                <tr>
                    <td>
                        <a href="{{ asset('storage/' . $cv->cv_file) }}" target="_blank" class="btn btn-sm btn-info">
                            Download
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('cv_uploads.edit', $cv->id) }}" class="btn btn-sm btn-warning">
                            Edit
                        </a>
                        <form action="{{ route('cv_uploads.destroy', $cv->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this CV?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
