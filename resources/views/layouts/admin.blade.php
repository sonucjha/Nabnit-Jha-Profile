<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/admin/app.css') }}">
</head>
<body>
    <div class="sidebar">
        @include('partials.sidebar') <!-- Sidebar Menu -->
    </div>

    <div class="main-content">
        <header>
            @include('partials.header') <!-- Header -->
        </header>

        <div class="content">
            @yield('content') <!-- Main Content -->
        </div>
    </div>

    <footer>
        @include('partials.footer') <!-- Footer -->
    </footer>
</body>
</html>
