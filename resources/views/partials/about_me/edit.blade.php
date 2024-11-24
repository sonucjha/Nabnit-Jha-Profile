@extends('layouts.admin')

@section('content')
<div>
    <h1>Edit About Me</h1>
    <form action="{{ route('about_me.update', $aboutMe->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $aboutMe->title) }}">
            @error('title')<span>{{ $message }}</span>@enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description">{{ old('description', $aboutMe->description) }}</textarea>
            @error('description')<span>{{ $message }}</span>@enderror
        </div>
        <button type="submit">Update</button>
    </form>
</div>
@endsection
