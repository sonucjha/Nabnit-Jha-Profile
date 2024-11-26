@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h1>Edit About Me</h1>
        <form action="{{ route('skills.update', $skill->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('title', $skill->name) }}">
            </div>

            <div class="mb-3">
                <label for="icon" class="form-label">Icon</label>
                <input type="text" name="icon" id="icon" class="form-control" value="{{old('icon', $skill->icon) }}">
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="5">{{ old('description', $skill->description) }}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
