<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/html/vertical-light-menu/layout-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Jul 2025 10:47:10 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Boxed | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="https://designreset.com/cork/html/src/assets/img/favicon.ico" />

    {{-- <link href="../layouts/vertical-light-menu/css/light/loader.css"
            rel="stylesheet" type="text/css" /> --}}
    <link href="{{ asset('/cork/html/layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet"
        type="text/css" />

    {{-- <link href="../layouts/vertical-light-menu/css/dark/loader.css"
            rel="stylesheet" type="text/css" /> --}}
    <link href="{{ asset('/cork/html/layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet"
        type="text/css" />

    {{-- <script src="../layouts/vertical-light-menu/loader.js"></script>
        --}}
    <script src="{{ asset('/cork/html/layouts/vertical-light-menu/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    {{-- <link href="../src/bootstrap/css/bootstrap.min.css"
            rel="stylesheet" type="text/css" /> --}}
    <link href="{{ asset('/cork/html/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    {{-- <link href="../layouts/vertical-light-menu/css/light/plugins.css"
            rel="stylesheet" type="text/css" /> --}}
    <link href="{{ asset('/cork/html/layouts/vertical-light-menu/css/light/plugins.css') }}" rel="stylesheet"
        type="text/css" />

    {{-- <link href="../layouts/vertical-light-menu/css/dark/plugins.css"
            rel="stylesheet" type="text/css" /> --}}
    <link href="{{ asset('/cork/html/layouts/vertical-light-menu/css/dark/plugins.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    {{-- <link rel="stylesheet" type="text/css"
            href="../src/assets/css/light/elements/alert.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/cork/html/src/assets/css/light/elements/alert.css') }}">

    {{-- <link rel="stylesheet" type="text/css"
            href="../src/assets/css/dark/elements/alert.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/cork/html/src/assets/css/dark/elements/alert.css') }}">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body class="layout-boxed" layout="boxed">

    <!-- BEGIN LOADER -->
    <div id="">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    {{-- Include Header --}}
    @include('layouts.admin.blocks.header')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        {{-- Include Sidebar --}}
        @include('layouts.admin.blocks.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            {{-- Yield Content (dashboard)  --}}
            @yield('content')

            {{-- Include Footer --}}
            @include('layouts.admin.blocks.footer')
            {{-- <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class>Copyright © <span class="dynamic-year">2022</span> <a target="_blank"
                            href="https://designreset.com/cork-admin/">DesignReset</a>,
                        All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class>Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg></p>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    {{-- <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
        --}}
    <script src="{{ asset('/cork/html/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    {{-- <script
            src="../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        --}}
    <script src="{{ asset('/cork/html/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    {{-- <script
            src="../src/plugins/src/mousetrap/mousetrap.min.js"></script> --}}
    <script src="{{ asset('/cork/html/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>

    {{-- <script src="../src/plugins/src/waves/waves.min.js"></script> --}}
    <script src="{{ asset('/cork/html/src/plugins/src/waves/waves.min.js') }}"></script>

    {{-- <script src="../layouts/vertical-light-menu/app.js"></script> --}}
    <script src="{{ asset('/cork/html/layouts/vertical-light-menu/app.js') }}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/html/vertical-light-menu/layout-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Jul 2025 10:47:10 GMT -->

</html>
