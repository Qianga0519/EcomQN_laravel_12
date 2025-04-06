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
</head>

<body>
    @include('notifications.alert-all-errors')

    <main>
        @include('frontend.components.header')
        @yield('content')
        @include('frontend.components.footer')
    </main>
    <script src="{{ asset('./assets/js/app.js') }}"></script>
</body>

</html>
