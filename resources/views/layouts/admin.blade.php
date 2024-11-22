<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>

     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/admin/app.css') }}"> <!-- Add custom styles here -->
</head>
<body>
    <div class="d-flex" style="height: 100vh;">
        <!-- Sidebar -->
        @include('partials.sidebar')
        
        <!-- Main Content -->
        <div class="flex-grow-1 d-flex flex-column">
            <!-- Header -->
            @include('partials.header')
            
            <!-- Page Content -->
            <main class="flex-grow-1 p-3">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="{{ asset('css/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

