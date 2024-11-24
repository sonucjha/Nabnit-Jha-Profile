<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />

    <title>Nabnit-Jha-Profile</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Additional CSS Files -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    {{-- <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" /> --}}

</head>

<body>
    <div id="page-wraper">
        <!-- Sidebar Menu -->
        @include('nabnit.sidebar')
        <!-- End Sidebar Menu -->

        <!-- About Me Menu -->
        @include('nabnit.about_me')
        <!-- End Aboutt Me Menu -->

        <!-- My Services Menu -->
        @include('nabnit.my_services')
        <!-- End My Services Menu -->

        <!-- My Work Menu -->
        @include('nabnit.my_work')
        <!-- End My Work Menu -->

        <!-- Contact Me Menu -->
        @include('nabnit.contact_me')
        <!-- End Contact Me Menu -->


    </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('css/jquery.min.js') }}"></script>
    <script src="{{ asset('css/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('css/nabnit/nabnit_header.js') }}"></script>

    {{-- <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script> --}}

</body>

</html>
