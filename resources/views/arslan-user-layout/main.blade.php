<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Site Title -->
    <title>@yield('title', 'Trust App')</title>

    <!-- Site Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('arslan-assets/image/logo.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('arslan-assets/css/bootstrap.min.css') }}">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('arslan-assets/css/fontawesome.min.css') }}">
</head>

<body>

    <!-- Loader -->
    @include('arslan-user-layout.loader')

    <!-- Top Bar -->
    @include('arslan-user-layout.topbar')

    <!-- Nav Bar -->
    @include('arslan-user-layout.navbar')

    <!-- Main Content -->
    @yield('content')

    <!-- Bootstrap JS -->
    <script src="{{ asset('arslan-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('arslan-assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('arslan-assets/js/popper.min.js') }}"></script>

    <!-- Font Awesome JS -->
    <script src="{{ asset('arslan-assets/js/fontawesome.min.js') }}"></script>
</body>

</html>
