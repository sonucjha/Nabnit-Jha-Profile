@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Create About Me</h4>
                    </div>
                    <div class="card-body">
                        <!-- Form -->
                        <form id="aboutMeForm"  action="{{ route('skills.store') }}" method="POST" >
                            @csrf
                            @method('POST')
                            <!-- Title Field -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                                <div class="invalid-feedback" id="titleError"></div>
                            </div>

                            <!-- Icon Field -->
                            <div class="mb-3">
                                <label for="icon" class="form-label">Icon</label>
                                <input type="text" class="form-control" id="icon" name="icon" placeholder="Enter icon">
                                <div class="invalid-feedback" id="titleError"></div>
                            </div>

                            <!-- Description Field -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="5" placeholder="Enter description"></textarea>
                                <div class="invalid-feedback" id="descriptionError"></div>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" id="submitButton">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
