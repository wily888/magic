<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tableau de bord AllôService</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('favicon.png') }}" rel="icon">
    <link href="{{ asset('apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('back/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('back/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('back/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('back/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('back/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('back/assets/css/style.css') }}" rel="stylesheet">


</head>

@include('layouts.back.header')
@include('layouts.back.nav')
@yield('content')
@include('layouts.back.footer')
<body>
    <!-- Vendor JS Files -->
    <script src="{{ asset('back/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('back/assets/js/main.js') }}"></script>

</body>

</html>
