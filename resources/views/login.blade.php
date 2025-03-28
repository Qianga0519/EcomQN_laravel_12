<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <!-- CDN fallback for CSS libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-container {
            max-width: 450px;
            width: 100%;
        }

        .login-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .login-header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        .login-body {
            padding: 40px 30px;
        }

        .form-floating {
            margin-bottom: 20px;
        }

        .btn-login {
            height: 50px;
            font-size: 16px;
            font-weight: 500;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border: none;
        }

        .btn-login:hover {
            background: linear-gradient(135deg, #5a0cb1 0%, #1e68e0 100%);
        }

        .login-footer {
            text-align: center;
            margin-top: 25px;
        }

        .login-footer a {
            color: #6a11cb;
            text-decoration: none;
            font-weight: 500;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }

        .password-toggle {
            cursor: pointer;
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            color: #6c757d;
        }

        .social-login {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 15px;
        }

        .social-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: white;
            transition: all 0.3s;
        }

        .social-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .facebook {
            background-color: #3b5998;
        }

        .google {
            background-color: #dd4b39;
        }

        .twitter {
            background-color: #1da1f2;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 30px 0;
        }

        .divider-line {
            flex-grow: 1;
            height: 1px;
            background-color: #e9ecef;
        }

        .divider-text {
            padding: 0 15px;
            color: #6c757d;
            font-size: 14px;
        }

        .brand-logo {
            width: 60px;
            height: 60px;
            margin-bottom: 15px;
        }

        @media (max-width: 576px) {
            .login-body {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="card login-card border-0">
            <div class="login-header">
                <div class="text-center">
                    <i class="bi bi-shop brand-logo fs-1"></i>
                    <h3 class="mb-2">Welcome Back!</h3>
                    <p class="mb-0">Sign in to continue to ShopName</p>
                </div>
            </div>

            <div class="login-body bg-white">
                <!-- Alert for errors -->
                <div class="alert alert-danger d-none" id="loginAlert" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    <span id="alertMessage">Invalid email or password</span>
                </div>

                <form id="loginForm">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="emailInput" placeholder="name@example.com"
                            required>
                        <label for="emailInput">Email address</label>
                    </div>

                    <div class="form-floating position-relative">
                        <input type="password" class="form-control" id="passwordInput" placeholder="Password" required>
                        <label for="passwordInput">Password</label>
                        <span class="password-toggle" onclick="togglePasswordVisibility()">
                            <i class="bi bi-eye" id="togglePassword"></i>
                        </span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">
                                Remember me
                            </label>
                        </div>
                        <a href="#" class="text-decoration-none">Forgot password?</a>
                    </div>

                    <button class="btn btn-primary w-100 btn-login" type="submit">
                        Sign In
                    </button>

                    <div class="divider">
                        <div class="divider-line"></div>
                        <span class="divider-text">OR CONTINUE WITH</span>
                        <div class="divider-line"></div>
                    </div>

                    <div class="social-login">
                        <a href="#" class="social-btn facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="social-btn google">
                            <i class="bi bi-google"></i>
                        </a>
                        <a href="#" class="social-btn twitter">
                            <i class="bi bi-twitter"></i>
                        </a>
                    </div>
                </form>
            </div>

            <div class="login-footer bg-white pb-4">
                <p class="mb-0">Don't have an account? <a href="{{ url('register') }}">Sign up</a></p>
            </div>
        </div>

        <div class="text-center mt-4 text-muted small">
            <p>© 2023 ShopName. All rights reserved.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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

        // Form submission
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const email = document.getElementById('emailInput').value;
            const password = document.getElementById('passwordInput').value;

            // Simple validation example
            if (email === 'user@example.com' && password === 'password123') {
                // Successful login - redirect to user dashboard or homepage
                window.location.href = 'index.html';
            } else {
                // Show error message
                const alertElement = document.getElementById('loginAlert');
                alertElement.classList.remove('d-none');

                // Hide alert after 3 seconds
                setTimeout(() => {
                    alertElement.classList.add('d-none');
                }, 3000);
            }
        });
    </script>
</body>

</html>
