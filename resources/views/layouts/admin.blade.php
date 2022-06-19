<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ecommerce website">
    <meta name="author" content="Marwan-tabib">
    <meta name="robots" content="all,follow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('back/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    @yield('style')

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body id="page-top">
    <div id="app">
        <!-- Page Wrapper -->
        <div id="wrapper">
            @include('partail.back.sidebar')
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    @include('partail.back.navbar')

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        @yield('content')
                    </div>

                </div>
                @include('partail.back.footer')
            </div>
        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        @include('partail.back.model')
    </div>
    
</body>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('back/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('back/js/sb-admin-2.min.js') }}"></script>
    @yield('script')

</html>
