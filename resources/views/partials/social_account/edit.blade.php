@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h1>Edit About Me</h1>
        <form action="{{ route('social_account.update', $socialAccount->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('title', $socialAccount->name) }}">
            </div>
            
            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <textarea name="url" id="url" class="form-control" rows="5">{{ old('url', $socialAccount->url) }}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
