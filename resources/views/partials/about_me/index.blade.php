@extends('layouts.admin')

@section('content')
<div>
    <h1>About Me Details</h1>
    {{-- <a href="{{ route('about_me.create') }}">Add New</a>
    <ul>
        @foreach ($aboutMe as $entry)
        <li>
            <h3>{{ $entry->title }}</h3>
            <p>{{ $entry->description }}</p>
            <a href="{{ route('about_me.edit', $entry->id) }}">Edit</a>
            <form action="{{ route('about_me.destroy', $entry->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
        @endforeach
    </ul> --}}
</div>
@endsection
