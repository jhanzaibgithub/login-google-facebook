<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Login</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .social-btn i {
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="bg-dark text-white py-3">
        <div class="container text-center">
            <h1>My App</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container my-5">
        <div class="text-center">
            <h4 class="mb-4">Login Using Social Media</h4>

            <div class="d-grid gap-3 col-md-6 col-sm-8 col-10 mx-auto">
                <a href="{{ url('login/google') }}" class="btn btn-outline-danger btn-lg social-btn">
                    <i class="bi bi-google"></i> Login with Google
                </a>

                <a href="{{ url('login/facebook') }}" class="btn btn-outline-primary btn-lg social-btn">
                    <i class="bi bi-facebook"></i> Login with Facebook
                </a>

                <a href="{{ url('login/linkedin') }}" class="btn btn-outline-info btn-lg social-btn">
                    <i class="bi bi-linkedin"></i> Login with LinkedIn
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-3 mt-auto">
        <div class="container text-center">
            <small>&copy; {{ date('Y') }} My App. All rights reserved.</small>
        </div>
    </footer>

    <!-- Bootstrap 5 JS (Optional if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
