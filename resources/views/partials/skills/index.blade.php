@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1>Skill Details</h1>
    <div class="text-right mb-3">
        <a href="{{ route('skills.create') }}" class="btn btn-primary">Add New</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Icon</th>
                <th scope="col" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($skills as $entry)
            <tr>
                <td>{{ $entry->name }}</td>
                <td>{{ $entry->description }}</td>
                <td>{{ $entry->icon }}</td>
                <td class="text-center">
                    <a href="{{ route('skills.edit', $entry->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('skills.destroy', $entry->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
