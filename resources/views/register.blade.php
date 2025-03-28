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
                                <input type="text" class="form-control" id="firstNameInput" placeholder="First Name"
                                    required>
                                <label for="firstNameInput">First Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="lastNameInput" placeholder="Last Name"
                                    required>
                                <label for="lastNameInput">Last Name</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="emailInput" placeholder="name@example.com"
                            required>
                        <label for="emailInput">Email address</label>
                    </div>

                    <div class="form-floating">
                        <input type="tel" class="form-control" id="phoneInput" placeholder="Phone Number">
                        <label for="phoneInput">Phone Number (optional)</label>
                    </div>

                    <div class="form-floating position-relative">
                        <input type="password" class="form-control" id="passwordInput" placeholder="Password" required
                            minlength="8" onkeyup="checkPasswordStrength()">
                        <label for="passwordInput">Password</label>
                        <span class="password-toggle"
                            onclick="togglePasswordVisibility('passwordInput', 'togglePassword')">
                            <i class="bi bi-eye" id="togglePassword"></i>
                        </span>
                    </div>

                    <div class="password-strength bg-secondary opacity-25" id="passwordStrength"></div>
                    <div class="small text-muted mb-3" id="passwordFeedback">Password must be at least 8 characters
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

        // Check password strength
        function checkPasswordStrength() {
            const password = document.getElementById('passwordInput').value;
            const strengthBar = document.getElementById('passwordStrength');
            const feedback = document.getElementById('passwordFeedback');

            // Reset the strength bar
            strengthBar.style.width = '0%';
            strengthBar.className = 'password-strength';

            if (password.length === 0) {
                feedback.textContent = 'Password must be at least 8 characters';
                return;
            }

            // Calculate strength
            let strength = 0;

            // Length check
            if (password.length >= 8) strength += 25;

            // Character variety checks
            if (/[A-Z]/.test(password)) strength += 25; // Uppercase
            if (/[a-z]/.test(password)) strength += 25; // Lowercase
            if (/[0-9]/.test(password)) strength += 15; // Numbers
            if (/[^A-Za-z0-9]/.test(password)) strength += 10; // Special characters

            // Update the strength bar
            strengthBar.style.width = strength + '%';

            // Update color and feedback based on strength
            if (strength < 40) {
                strengthBar.classList.add('bg-danger');
                feedback.textContent = 'Weak password';
            } else if (strength < 70) {
                strengthBar.classList.add('bg-warning');
                feedback.textContent = 'Moderate password';
            } else {
                strengthBar.classList.add('bg-success');
                feedback.textContent = 'Strong password';
            }
        }

        // Form submission
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const password = document.getElementById('passwordInput').value;
            const confirmPassword = document.getElementById('confirmPasswordInput').value;
            const alertElement = document.getElementById('registerAlert');

            // Check if passwords match
            if (password !== confirmPassword) {
                document.getElementById('alertMessage').textContent = 'Passwords do not match';
                alertElement.classList.remove('d-none');
                alertElement.classList.add('alert-danger');
                alertElement.classList.remove('alert-success');

                // Hide alert after 3 seconds
                setTimeout(() => {
                    alertElement.classList.add('d-none');
                }, 3000);

                return;
            }

            // If validation passes, simulate successful registration
            // In a real application, you would send this data to your server

            // Show success message
            alertElement.classList.remove('alert-danger');
            alertElement.classList.add('alert-success');
            document.getElementById('alertMessage').textContent =
                'Registration successful! Redirecting to login...';
            alertElement.classList.remove('d-none');

            // Redirect to login page after 2 seconds
            setTimeout(() => {
                window.location.href = 'login.html';
            }, 2000);
        });
    </script>
</body>

</html>
