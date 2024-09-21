<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!-- Page Title -->
    <title>@yield('title', 'Trust App')</title>

    <!-- Site Icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('app-assets/admin/logos/logo.png') }}" />

    <!-- Loader Styles -->
    <link href="{{ asset('app-assets/admin/layouts/modern-dark-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('app-assets/admin/layouts/modern-dark-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('app-assets/admin/layouts/modern-dark-menu/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('app-assets/admin/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('app-assets/admin/layouts/modern-dark-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('app-assets/admin/layouts/modern-dark-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('app-assets/admin/src/plugins/src/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('app-assets/admin/src/assets/css/light/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('app-assets/admin/src/assets/css/dark/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
</head>

<body class="layout-boxed">

    <!-- Loader Include -->
    @include('admin-layout.loader')

    <!--  Navbar Include  -->
    @include('admin-layout.navbar')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  Sidebar Include  -->
        @include('admin-layout.sidebar')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <div class="row layout-top-spacing">
                        @yield('content')
                    </div>

                </div>

            </div>

            <!-- Footer Include -->
            @include('admin-layout.footer')

        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('app-assets/admin/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('app-assets/admin/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('app-assets/admin/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('app-assets/admin/src/plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{ asset('app-assets/admin/layouts/modern-dark-menu/app.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('app-assets/admin/src/plugins/src/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('app-assets/admin/src/assets/js/dashboard/dash_1.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

</html>
