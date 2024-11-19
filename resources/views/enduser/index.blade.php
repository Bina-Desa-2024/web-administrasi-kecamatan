@extends('layouts.userlayout')

@section('child')

<!-- Di dalam <head> atau sebelum </body> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

<style>
    body, h1, h2, h3, p {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        color: #333;
    }

    .h1 {
        font-family: 'Roboto Slab', serif;
        font-weight: 500;
    }

    /* Hero Section */
    .hero {
        background: linear-gradient(135deg, #e3f9f5, #bddcbf);
        padding: 80px 20px;
    }

    .hero h1 {
        font-size: 2.5rem;
        color: #004d40;
    }

    .hero img {
        max-width: 400px;
        border-radius: 50%;
    }

    .btn-custom {
        background-color: #00695c;
        color: white;
        border: none;
        padding: 10px 20px;
        font-weight: bold;
        border-radius: 30px;
        transition: all 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #004d40;
        color: #e0f2f1;
    }

    /* FAQ Section */
    .faq-section {
        background-color: #f1f8e9;
        padding: 60px 20px;
    }

    .faq-section h2 {
        color: #2e7d32;
        font-size: 2rem;
    }

    .accordion .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .accordion .card:hover {
        transform: translateY(-5px);
    }

    .accordion .card-header {
        background-color: #ffffff;
        border-bottom: none;
        padding: 20px;
        border-radius: 10px 10px 0 0;
    }

    .accordion .card-header button {
        text-decoration: none;
        font-size: 1rem;
        font-weight: 500;
        color: #004d40;
    }

    .accordion .card-body {
        background-color: #ffffff;
        border-radius: 0 0 10px 10px;
        padding: 20px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2rem;
        }

        .hero img {
            max-width: 250px;
        }

        .btn-custom {
            width: 100%;
        }
    }

    @media (max-width: 576px) {
        .accordion .card-header button {
            font-size: 0.9rem;
        }

        .faq-section h2 {
            font-size: 1.5rem;
        }
    }
</style>

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show mx-2" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session('error'))
<div class="alert alert-danger alert-dismissible fade show mx-2" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<section class="hero text-center d-flex align-items-center justify-content-center min-vh-100" id="home">
    <div class="container">
        <div class="hero-content text-center text-md-start d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div class="text-content mb-4 mb-md-0">
                <h1 class="h1 mb-4">
                    Aplikasi Pelayanan Surat Administrasi Desa Gugah Sejahtera
                </h1>
                <p class="text-muted mb-4">
                    Solusi terbaik untuk pengelolaan surat yang efisien, praktis, dan mudah diakses kapan saja!
                </p>
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-start gap-3 mb-4">
                    <a href="{{ url('/buatsurat') }}" class="btn btn-custom">
                        Buat Surat
                    </a>
                </div>
            </div>

            <div class="col-md-6 d-flex justify-content-center mb-4 mb-md-0">
                <img src="{{ asset('img/postman.jpg') }}" alt="Mail Banner" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>Frequently Asked Questions</h2>
                <div class="mt-4">
                    @php
                        $faqData = [
                            [
                                'question' => 'How do I locate e-waste recycling facilities using ELocate?',
                                'answer' => 'ELocate provides a dedicated facility locator page where you can easily find the nearest e-waste recycling facilities. Simply use the map feature to explore facilities in your area and get detailed information.',
                            ],
                            [
                                'question' => 'Is the information about e-waste facilities on ELocate verified?',
                                'answer' => 'Yes, ELocate ensures that the information about e-waste recycling facilities is verified. This verification process helps users trust the accuracy and reliability of the facility details provided on the platform.',
                            ],
                        ];
                    @endphp

                    <div class="accordion mt-5" id="faqAccordion">
                        @foreach ($faqData as $index => $faq)
                            <div class="card mb-3">
                                <div class="card-header" id="heading{{ $index }}">
                                    <h5 class="mb-0 d-flex justify-content-between align-items-center">
                                        <button class="btn btn-link text-dark text-left font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
                                            {{ $faq['question'] }}
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapse{{ $index }}" class="collapse" aria-labelledby="heading{{ $index }}" data-parent="#faqAccordion">
                                    <div class="card-body">
                                        {{ $faq['answer'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
