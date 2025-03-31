<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Document metadata and character encoding -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'QN Shop')</title>

    <!-- CSS stylesheets from local node_modules -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('./assets/css/styles.css') }}">
    <!-- CDN fallback for CSS libraries -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"> --}}
</head>

<body>
    <main>
        <!-- Header section with navigation -->
        @include('components.header')
        <!-- End of header section -->
        @yield('content')
        <!-- Footer start -->
        @include('components.footer')
        <!-- Footer end -->
    </main>
    <!-- cdn  -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> --}}

    <script src="{{ asset('./assets/js/app.js') }}"></script>

</body>

</html>
