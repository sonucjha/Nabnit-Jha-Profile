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
                        <form id="aboutMeForm"  action="{{ route('social_account.store') }}" method="POST" >
                            @csrf
                            @method('POST')
                            <!-- Name Field -->
                            <div class="mb-3">
                                <label for="name" class="form-label">name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                                <div class="invalid-feedback" id="titleError"></div>
                            </div>

                            <!-- url Field -->
                            <div class="mb-3">
                                <label for="url" class="form-label">URL</label>
                                <textarea class="form-control" id="url" name="url" rows="5" placeholder="Enter url"></textarea>
                                <div class="invalid-feedback" id="urlError"></div>
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
