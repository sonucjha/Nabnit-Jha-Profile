@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">About Me Details</h1>
    <a href="{{ route('about_me.create') }}" class="btn btn-primary mb-3">Add New</a>
    <div class="list-group">
        @foreach ($aboutMe as $entry)
        <div class="list-group-item">
            <h3 class="mb-2">{{ $entry->title }}</h3>
            <p class="mb-3">{{ $entry->description }}</p>
            <a href="{{ route('about_me.edit', $entry->id) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
            <form action="{{ route('about_me.destroy', $entry->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection
