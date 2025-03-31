<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Document metadata and character encoding -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app-admin.css', 'resources/js/app-admin.js'])
    <!-- CSS stylesheets from local node_modules -->
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('./assets/css/styles-admin.css') }}">
    <link rel="stylesheet" href="./assets/css/styles-admin.css">

    <!-- CDN fallback for CSS libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>

<body>
    <!-- Mobile sidebar toggle button -->
    <div class="d-md-none position-fixed top-0 end-0 p-3 z-index-high">
        <button class="btn btn-dark" id="sidebarToggle">
            <i class="bi bi-list"></i>
        </button>
    </div>

    <main class="d-flex flex-nowrap position-relative">
        @include('backend.components.partials.sidebar')
        <!-- Main content area -->
        <div class="content-wrapper flex-grow-1 p-3 p-md-4">
            @include('backend.components.partials.header')

            @yield('content')
            <!-- Footer -->
            @include('backend.components.partials.footer')
        </div>
    </main>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./node_modules/swiper/swiper-bundle.min.js"></script>
    <!-- cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Optional: Add Chart.js for the charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Initialize tooltips
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

        // Mobile sidebar toggle
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
        });
    </script>
</body>

</html>
