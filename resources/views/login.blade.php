<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Administrasi Desa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body >
    
    <div class="container min-vh-100">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header text-center">
                        <img class="" src="{{ url('/logo-lsp-untan.PNG') }}" width="100px" alt="">
                        {{-- <h3 class=" font-weight-light my-4">Login Admin LSP UNTAN</h3> --}}
                    </div>
                    @if (session()->has('LoginError'))
                    <div class="mx-3 alert alert-danger alert-dismissible fade show mt-4" role="alert">
                        {{ session('LoginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="card-body">
                        <form action="/adminlogin" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="username" name="username" type="text" placeholder="Username" required/>
                                <label for="username">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" name="password" type="password" placeholder="Password" required/>
                                <label for="password">Password</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-primary">
        Copyright © 2024 e-SuratDesa. All rights reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>


