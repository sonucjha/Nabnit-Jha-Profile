<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nabnit-Jha-Profile')</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Add custom styles here -->
    <link rel="stylesheet" href="{{ asset('css/nabnit/nabnit_header.css') }}"> 
</head>

<body>
    <!-- preloader-start -->
    <div id="preloader">
        <div class="rasalina-spin-box"></div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header area -->
    @include('nabnit_partials.header')

    <!-- main area -->
    @include('nabnit_partials.main_area')

    <!-- footer area -->
    @include('nabnit_partials.footer')

    
    <script src="{{ asset('css/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('css/nabnit/nabnit_header.js') }}"></script>
</body>

</html>
