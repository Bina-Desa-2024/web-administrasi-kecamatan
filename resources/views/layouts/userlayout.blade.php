<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>goChange</title>
    <link rel="icon" href="{{ asset('basic-gold-coin.png') }}" type="image/png" sizes="32x32">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <script src="/js/datatables-simple-demo.js"></script>
    <style>
        body {
            padding-top: 85px;
            background-color: rgb(240, 246, 242);
            font-family: 'Poppins', sans-serif;
            /* Changed to Poppins */
        }

        .navbar {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border: none;
            height: 85px;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }

        .navbar-nav {
            margin-left: auto;
            margin-right: auto;
        }

        .navbar-nav .nav-item {
            margin-right: 30px;
            /* Adjust this value to increase/decrease spacing */
        }

        /* Optional: Adjust the last nav-item to remove extra margin */
        .navbar-nav .nav-item:last-child {
            margin-right: 0;
        }

        .nav-link {
            transition: color 0.3s ease;
            /* Smooth color transition */
            color: #333;
            /* Dark color for inactive links */
        }

        /* Active link color */
        .nav-link.active {
            color: #28a745;
            /* Green for active links */
        }

        .nav-link:hover {
            color: #28a745;
            /* Change link color on hover */
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand text-warning" href="/"><span class="text-success">go</span>Change</a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-space-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('maps') ? 'active' : '' }}" href="/maps">Maps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('recycle') ? 'active' : '' }}" href="/recycle">Recycle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('education') ? 'active' : '' }}"
                            href="#">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/Contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('history') ? 'active' : '' }}" href="/history">History</a>
                    </li>
                </ul>
            </div>
            <!-- Login and Signup Buttons -->
            <div class="d-flex">
                <a class="btn btn-outline-success me-2" href="/login" role="button">Login</a>
                <a class="btn btn-success" href="/register" role="button">Sign Up</a>
            </div>

        </div>
    </nav>

    <main class="wrapper">
        @yield('child')
    </main>

    <footer class="footer">
        <p class="text-muted mb-0">goChange © 2024 . All Rights Reserved.</p>

    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
</body>

</html>
