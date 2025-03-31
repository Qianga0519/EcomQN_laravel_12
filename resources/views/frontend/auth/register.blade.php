<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
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

        .register-container {
            max-width: 500px;
            width: 100%;
        }

        .register-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .register-header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        .register-body {
            padding: 40px 30px;
        }

        .form-floating {
            margin-bottom: 20px;
        }

        .btn-register {
            height: 50px;
            font-size: 16px;
            font-weight: 500;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border: none;
        }

        .btn-register:hover {
            background: linear-gradient(135deg, #5a0cb1 0%, #1e68e0 100%);
        }

        .register-footer {
            text-align: center;
            margin-top: 25px;
        }

        .register-footer a {
            color: #6a11cb;
            text-decoration: none;
            font-weight: 500;
        }

        .register-footer a:hover {
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

        .password-strength {
            height: 5px;
            margin-top: -15px;
            margin-bottom: 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .social-register {
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
            .register-body {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="register-container">
        <div class="card register-card border-0">
            <div class="register-header">
                <div class="text-center">
                    <i class="bi bi-shop brand-logo fs-1"></i>
                    <h3 class="mb-2">Create Account</h3>
                    <p class="mb-0">Get started with your free account</p>
                </div>
            </div>

            <div class="register-body bg-white">
                <!-- Alert for errors/success -->
                <div class="alert alert-danger d-none" id="registerAlert" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    <span id="alertMessage">Registration error</span>
                </div>

                <form id="registerForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="name" class="form-control" id="nameInput" placeholder="name@example.com"
                                    required>
                                <label for="nameInput">Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="phoneInput" placeholder="Phone Number">
                                <label for="phoneInput">Phone Number (optional)</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="emailInput" placeholder="name@example.com"
                            required>
                        <label for="emailInput">Email address</label>
                    </div>



                    <div class="form-floating position-relative">
                        <input type="password" class="form-control" id="passwordInput" placeholder="Password" required
                            minlength="8">
                        <label for="passwordInput">Password</label>
                        <span class="password-toggle"
                            onclick="togglePasswordVisibility('passwordInput', 'togglePassword')">
                            <i class="bi bi-eye" id="togglePassword"></i>
                        </span>
                    </div>
                    <div class="form-floating position-relative">
                        <input type="password" class="form-control" id="confirmPasswordInput"
                            placeholder="Confirm Password" required>
                        <label for="confirmPasswordInput">Confirm Password</label>
                        <span class="password-toggle"
                            onclick="togglePasswordVisibility('confirmPasswordInput', 'toggleConfirmPassword')">
                            <i class="bi bi-eye" id="toggleConfirmPassword"></i>
                        </span>
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="termsCheck" required>
                        <label class="form-check-label" for="termsCheck">
                            I agree to the <a href="#" class="text-decoration-none">Terms of Service</a> and <a
                                href="#" class="text-decoration-none">Privacy Policy</a>
                        </label>
                    </div>

                    <button class="btn btn-primary w-100 btn-register" type="submit">
                        Create Account
                    </button>

                    <div class="divider">
                        <div class="divider-line"></div>
                        <span class="divider-text">OR SIGN UP WITH</span>
                        <div class="divider-line"></div>
                    </div>

                    <div class="social-register">
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

            <div class="register-footer bg-white pb-4">
                <p class="mb-0">Already have an account? <a href="{{ url('login') }}">Sign in</a></p>
            </div>
        </div>

        <div class="text-center mt-4 text-muted small">
            <p>© 2023 ShopName. All rights reserved.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle password visibility
        function togglePasswordVisibility(inputId, toggleId) {
            const passwordInput = document.getElementById(inputId);
            const toggleIcon = document.getElementById(toggleId);

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.replace('bi-eye', 'bi-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.replace('bi-eye-slash', 'bi-eye');
            }
        }
    </script>
</body>

</html>
