@extends('layouts.userlayout')

@section('child')

<!-- Di dalam <head> atau sebelum </body> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    body, h1, h2, h3, p {
        font-family: 'Poppins', sans-serif;
    }

    /* Other styles */
</style>

<section class="section hero text-center d-flex align-items-center justify-content-center min-vh-100" id="home" aria-label="hero" style="background-color: #e9f5f2;"> <!-- Light teal background -->
    <div class="container">
        <div class="hero-content text-center text-md-start d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div class="text-content mb-4 mb-md-0">
                <h1 class="h1 mb-4">
                    Your technology partner for Innovative and Impactful 
                    <br />
                    <span class="text-success pt-2">
                        E-Waste Recycling Solution
                    </span>
                </h1>

                <p class="text-muted mb-4">
                    <span class="text-success">go</span><span class="text-warning">Change</span>: Transforming E-Waste Management. Find E-waste facilities effortlessly with our platform. Your key to responsible recycling and sustainability.
                </p>

                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-start gap-3 mb-4">
                    <a href="{{ url('/recycle') }}" class="btn btn-success">
                        Start Recycling
                    </a>
                    <a href="{{ url('/maps') }}" class="btn btn-success">
                        Locate Facility
                    </a>
                </div>
            </div>

            <div class="col-md-6 d-flex justify-content-center mb-4 mb-md-0">
                <img src="https://img.freepik.com/free-photo/man-proud-himself_1368-1756.jpg?t=st=1729888065~exp=1729891665~hmac=a4c05f6645d586bf991a7bc054f9ba349647f14b0d916adf907e532b0f1343cf&w=900" alt="E-Waste Banner" class="img-fluid rounded-circle" style="max-width: 485px; ">
            </div>
        </div>
    </div>
</section>

<section class="features" id="features" aria-label="features" style="background-color: #bce3c6;"> <!-- Light beige background -->
    <div class="container mx-auto  py-4 text-center">
        @php
            $elocateFeatures = [
                [
                    'number' => '01',
                    'title' => 'Comprehensive E-Waste Collection',
                    'description' => 'A network of reliable and certified e-waste collection facilities to ensure responsible disposal.'
                ],
                [
                    'number' => '02',
                    'title' => 'Educational Resources',
                    'description' => 'Detailed information about e-waste and collection facilities to empower users with knowledge.'
                ],
                [
                    'number' => '03',
                    'title' => 'User-Friendly Interface',
                    'description' => 'A dynamic and easy-to-use platform for individuals and businesses seeking e-waste solutions.'
                ],
                [
                    'number' => '04',
                    'title' => 'Facility Management Dashboard',
                    'description' => 'Comprehensive dashboard for facility owners to manage bookings and credits seamlessly.'
                ],
            ];
        @endphp

        <h2 class="text-4xl font-bold text-black mb-5 mt-4">Our Features</h2>
        <ul class="list-unstyled d-flex flex-wrap justify-content-center gap-4 py-4 my-2">
            @foreach ($elocateFeatures as $feature)
                <li class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card p-4 shadow-lg border-0 h-100 transition-transform transform hover:scale-105">
                        <div class="card-body bg-success text-white rounded">
                            <data class="card-number display-6 font-weight-bold d-block mb-3">
                                {{ $feature['number'] }}
                            </data>
                            <h3 class="h5 card-title font-weight-bold mb-2">{{ $feature['title'] }}</h3>
                            <p class="card-text">{{ $feature['description'] }}</p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>

<style>
    .card {
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .card {
            margin: 0 auto;
        }
    }
</style>

<section class="mb-5" style="background-color: #bddcbf;"> <!-- Light cyan background -->
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="text-4xl font-bold text-black mb-5 mt-5">Frequently Asked Questions</h2>
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
                            [
                                'question' => 'Can I book the recycling of my e-waste through ELocate?',
                                'answer' => 'Absolutely! ELocate offers a user-friendly booking system that allows you to schedule the recycling of your e-waste. Choose the facility, select a convenient pickup date and time, and contribute to sustainable e-waste management.',
                            ],
                            [
                                'question' => 'What educational resources are available on ELocate?',
                                'answer' => 'ELocate features an education section with blogs and informative content to raise awareness about the impact of e-waste. Explore articles that highlight the importance of responsible e-waste recycling and its positive effects on the environment.',
                            ],
                            [
                                'question' => 'How can I stay updated on the latest rules and regulations regarding e-waste management?',
                                'answer' => 'ELocate provides a dedicated section that lists the latest government rules and regulations related to e-waste management. Stay informed about the legal aspects of e-waste disposal and contribute to a greener environment.',
                            ],
                            [
                                'question' => 'Is there a newsletter for ELocate users?',
                                'answer' => 'Yes, ELocate offers a newsletter signup feature. By subscribing to the newsletter, you\'ll receive updates, promotions, and valuable information about e-waste recycling. Stay connected with the latest news and initiatives in the e-waste management sector.',
                            ],
                        ];
                    @endphp

                    <div class="accordion mt-5" id="faqAccordion">
                        @foreach ($faqData as $index => $faq)
                            <div class="card mb-3">
                                <div class="card-header p-4" id="heading{{ $index }}">
                                    <h5 class="mb-0 d-flex justify-content-between align-items-center">
                                        <button class="btn btn-link text-dark text-left font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
                                            {{ $faq['question'] }}
                                        </button>
                                        <span>
                                            <i class="fas {{ (old('active') === $index) ? 'fa-chevron-up' : 'fa-chevron-down' }}"></i>
                                        </span>
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


    {{-- <style>
        body {
            overflow: hidden; /* Mencegah scroll di halaman ini */
        }
        h3 {
            text-align: left; /* Membuat tulisan rata kiri */
        }
        .content-wrapper {
            padding-left: 20px; /* Menambahkan ruang di kiri konten */
            max-width: 800px; 
            width: 100%; /* Membuatnya responsif pada layar kecil */
        }
    </style>

    <div class="min-vh-100 d-flex flex-column justify-content-center container">
        <div class="content-wrapper"> <!-- Konten dibatasi dan tidak terlalu ke kiri -->
            {{-- <img style="width: 200px" src="{{ url('/img/logo-jombang1.png') }}" alt=""> --}}
            {{-- <h2 class="text-white mt-4">
                <strong>Selamat Datang di Web Aplikasi Pelayanan Surat Administrasi Desa Rukma Jaya</strong>
            </h2>


            <!-- Button dengan ikon pesan -->
            <a href="/buatsurat" class="btn btn-light text-primary mt-4">
                <i class="fas fa-envelope"></i> Buat Surat
            </a>
        </div>
    </div> --}}





