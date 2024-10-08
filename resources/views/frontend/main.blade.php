<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Title -->
    <title>@yield('title') - AL-MUDASSAR TRUST</title>

    <!-- Site Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/frontend/assets/images/favicon.png') }}">

    <!-- CSS Libraries and Stylesheets -->
    <link href="{{ asset('app-assets/frontend/assets/library/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/frontend/assets/library/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/frontend/assets/library/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/frontend/assets/library/owlcarousel/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/frontend/assets/library/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/frontend/assets/library/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/frontend/assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('app-assets/frontend/assets/css/home-main.css') }}">

    <!-- Font Awesome (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

</head>

<body>

    <!-- Loader Component -->
    @include('frontend.loader')

    @if(Route::currentRouteName() == 'home')
        @include('frontend.header')
        @include('frontend.slider')
    @else
        @include('frontend.header1')
        @include('frontend.slider1')
    @endif

    <!-- Main Content Area -->
    <main id="body-content" class="body-non-overflow">

         @yield('content')
       

    </main>

    <!-- Footer Component -->
    @include('frontend.footer')

    <!-- JavaScript Libraries and Custom Scripts -->
    @include('frontend.scripts')
</body>

</html>
