<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite(['resources/css/app-admin.css', 'resources/js/app-admin.js'])
    <link rel="stylesheet" href="{{ asset('./assets/css/styles-admin-login.css') }}">
</head>

<body>
    <div class="login-container">
        <div class="card login-card border-0">
            <div class="login-header">
                <div class="d-flex align-items-center justify-content-center mb-3">
                    <i class="bi bi-speedometer2 me-2 fs-1"></i>
                    <h3 class="mb-0">Admin Dashboard</h3>
                </div>
                <p class="mb-0">Sign in to your account</p>
            </div>

            <div class="login-body bg-white">
                <!-- Alert for errors -->
                {{-- <div class="alert alert-danger d-none" id="loginAlert" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    <span id="alertMessage">Invalid email or password</span>
                </div> --}}
                <x-alert-error-form />
                <div class="w-100 p-3">
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        @if (Auth::guard('admin')->check())
                            <p>Da dang nhap</p>
                            <button type="submit" class="btn btn-primary">Logout</button>
                        @else
                            <p>Chua dang nhap</p>
                        @endif

                    </form>
                </div>
                <form id="loginForm" action="{{ route('admin.login') }}" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" id="emailInput"
                            placeholder="name@example.com" required>
                        <label for="emailInput">Email address</label>
                    </div>

                    <div class="form-floating position-relative">
                        <input type="password" class="form-control" name="password" id="passwordInput"
                            placeholder="Password" required>
                        <label for="passwordInput">Password</label>
                        <span class="password-toggle" onclick="togglePasswordVisibility()">
                            <i class="bi bi-eye" id="togglePassword"></i>
                        </span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                            <label class="form-check-label" for="rememberMe">
                                Remember me
                            </label>
                        </div>
                        <a href="#" class="text-decoration-none small">Forgot password?</a>
                    </div>

                    <button class="btn btn-primary w-100 btn-login" type="submit">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Sign In
                    </button>
                </form>
            </div>

            <div class="login-footer bg-white pb-4 d-none">
                <p class="mb-0">Don't have an account? <a href="register.html">Register</a></p>
            </div>
        </div>

        <div class="text-center mt-4 text-muted small">
            <p>© 2023 Admin Dashboard. All rights reserved.</p>
        </div>
    </div>


    <script>
        // Toggle password visibility
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('passwordInput');
            const toggleIcon = document.getElementById('togglePassword');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.replace('bi-eye', 'bi-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.replace('bi-eye-slash', 'bi-eye');
            }
        }

        // // Form submission
        // document.getElementById('loginForm').addEventListener('submit', function(event) {
        //     event.preventDefault();

        //     const email = document.getElementById('emailInput').value;
        //     const password = document.getElementById('passwordInput').value;

        //     // Simple validation example
        //     if (email === 'admin@example.com' && password === 'admin123') {
        //         // Successful login - redirect to dashboard
        //         window.location.href = 'dashboard.html';
        //     } else {
        //         // Show error message
        //         const alertElement = document.getElementById('loginAlert');
        //         alertElement.classList.remove('d-none');

        //         // Hide alert after 3 seconds
        //         setTimeout(() => {
        //             alertElement.classList.add('d-none');
        //         }, 3000);
        //     }
        // });
    </script>
</body>

</html>
