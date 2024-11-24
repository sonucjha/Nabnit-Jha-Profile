@extends('layouts.admin')

@section('content')
<div>
    <h1>Add About Me</h1>
    <form action="{{ route('about_me.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')<span>{{ $message }}</span>@enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description">{{ old('description') }}</textarea>
            @error('description')<span>{{ $message }}</span>@enderror
        </div>
        <button type="submit">Save</button>
    </form>
</div>
@endsection
