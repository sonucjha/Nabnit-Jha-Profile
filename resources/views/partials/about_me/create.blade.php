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
                        <form id="aboutMeForm">
                            @csrf
                            <!-- Title Field -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
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
                                <button type="button" class="btn btn-primary" id="submitButton">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Axios CDN (if not already included) -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.getElementById('submitButton').addEventListener('click', function () {
            const formData = {
                title: document.getElementById('title').value,
                description: document.getElementById('description').value,
            };

            axios.post('{{ url('/api/about_me/store') }}', formData)
                .then(response => {
                    alert('Data saved successfully!');
                    document.getElementById('aboutMeForm').reset();
                })
                .catch(error => {
                    if (error.response && error.response.status === 422) {
                        const errors = error.response.data.errors;
                        if (errors.title) {
                            document.getElementById('title').classList.add('is-invalid');
                            document.getElementById('titleError').innerText = errors.title[0];
                        }
                        if (errors.description) {
                            document.getElementById('description').classList.add('is-invalid');
                            document.getElementById('descriptionError').innerText = errors.description[0];
                        }
                    } else {
                        alert('An error occurred. Please try again.');
                    }
                });
        });
    </script>
@endsection
