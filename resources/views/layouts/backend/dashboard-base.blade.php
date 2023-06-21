<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        @yield('title')
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5">
        @include('components.backend.dashboard.mobile-sidebar')
        <div class="flex mt-[4.7rem] md:mt-0">
            @include('components.backend.dashboard.sidebar')
            <!-- BEGIN: Content -->
            <div class="content">
                @include('components.backend.dashboard.topbar')
                @yield('content')
            </div>
            <!-- END: Content -->
        </div>
        
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <!-- END: JS Assets-->
    </body>
</html>