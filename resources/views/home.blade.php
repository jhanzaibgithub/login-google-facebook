<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Success</title>

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
            <h1>Social Login App</h1>
            <p class="lead">Welcome to the platform</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container my-5">
        <div class="text-center">
            <h4 class="mb-4 text-success">✅ Thank You for Logging In!</h4>

            @if(Auth::check())
                <h5 class="mb-3">Welcome back, <strong>{{ Auth::user()->name }}</strong> 🎉</h5>

                @if(Auth::user()->google_id)
                    <p class="text-info"><i class="bi bi-google"></i> You have logged in using <strong>Google</strong>.</p>
                @elseif(Auth::user()->facebook_id)
                    <p class="text-primary"><i class="bi bi-facebook"></i> You have logged in using <strong>Facebook</strong>.</p>
                @elseif(Auth::user()->linkedin_id)
                    <p class="text-info"><i class="bi bi-linkedin"></i> You have logged in using <strong>LinkedIn</strong>.</p>
                @else
                    <p class="text-secondary"><i class="bi bi-person-circle"></i> You logged in with your email or another method.</p>
                @endif
            @else
                <h5 class="mb-3">You're now logged in!</h5>
            @endif

            <p class="lead">You now have full access to your account and features.</p>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-3 mt-auto">
        <div class="container text-center">
            <small>&copy; {{ date('Y') }} Social Login App. All rights reserved.</small>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
