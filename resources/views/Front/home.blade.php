@extends('front.layout')

@section('content')
    <!-- Hero Section -->
    <div id="home" class="hero p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-md-1 order-2 mt-5 pt-5 animate__animated animate__backInDown">
                    <h4 class="mt-5 pt-4 custom-h4 "><span class="custom-color">ENVIRONMENT</span> MANAGEMENT SYSTEM</h4>
                    <p>Selamat datang di laman mikrosite EMS.
                        Sebagai Perusahaan yang berkomitmen terhadap peningkatan mutu di setiap fungsi Manajemen, serta
                        selalu mempertimbangkan Aspek dan Dampak Lingkungan,
                        United Tractors selalu berusaha menjaga keseimbangan antara keberlanjutan bisnis dengan kelestarian
                        alam untuk Indonesia yang lebih sehat.</p>
                </div>
                <div class="col-md-4 order-md-2 order-1">
                    <img src="img/home-img.png" class="img-move" alt="Legal Compliance Image" >
                </div>
            </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 240" class="wave">
        <path fill="rgba(0, 0, 0, 0.25)"
            d="M0,64L80,53.3C160,43,320,21,480,18.7C640,16,800,32,960,53.3C1120,75,1280,96,1360,106.7L1440,117L1440,240L1360,240C1280,240,1120,240,960,240C800,240,640,240,480,240C320,240,160,240,80,240L0,240Z">
        </path>
        <path fill="rgba(0, 0, 0, 0.25)"
            d="M0,128L80,106.7C160,85,320,43,480,16C640,-11,800,-2,960,14.7C1120,31,1280,53,1360,74L1440,95L1440,240L1360,240C1280,240,1120,240,960,240C800,240,640,240,480,240C320,240,160,240,80,240L0,240Z">
        </path>
    </svg>




    <!-- legal dashboard -->
    <div id="home-bg"
        class="content-section mb-3"style="background-image: url('{{ asset('img/bg-footer.png') }}'); background-size: auto; background-repeat: no-repeat; background-position: bottom;">
            <div class="container pt-5">
                <h3 class="text-center mb-4">Hasil Program Kinerja Perusahaan bidang Lingkungan Hidup Periode Juni 2022
                    s.d Juli 2023</h3>
                <hr class="bg-success" style="margin: 0 auto 20px; width: 400px; border-width: 5px;">
                <div class="row pt-5 pb-5 ">
                    <div class="col-md-3 " >
                        <div class="card bg-transparent" style="height: 510px; border: 2px solid gold; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                            <img src="{{ asset('img/air.png') }}" class="card-img-top p-4" alt="Placeholder Image">
                            <div class="card-body bg-transparent text-center text-white">
                                <h5 class="card-title">Efisiensi Air</h5>
                                <h6 class="card-text text-white">624.455,05 m<sup>3</sup></h6>
                                <p class="card-text text-white">UT Berkontribusi dalam melindungi sumber daya air secara menyeluruh dengan mengembalikan lebih dari 100% air yang dimanfaatkan (positive water balance)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <div class="card bg-transparent" style="height: 510px; border: 2px solid gold; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                            <img src="{{ asset('img/emisi.png') }}" class="card-img-top p-4" alt="Placeholder Image">
                            <div class="card-body bg-transparent text-center text-white">
                                <h5 class="card-title">Penurunan Emisi GRK</h5>
                                <h6 class="card-text text-white">112.886.542,35 TonCO2</h6>
                                <p class="card-text text-white">UT memerangi perubahan iklim dengan mengurangi jejak karbon serta meminimalisir pelepasan karbon ke udara menuju zero nett carbon</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-transparent" style="height: 510px; border: 2px solid gold; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                            <img src="{{ asset('img/b3.png') }}" class="card-img-top p-4" alt="Placeholder Image">
                            <div class="card-body bg-transparent text-center text-white">
                                <h5 class="card-title">3R Limbah B3</h5>
                                <h6 class="card-text text-white">25.264.063,89 Ton</h6>
                                <p class="card-text text-white">UT akan terus berinovasi dalam upaya mengurangi limbah b3 disumber untuk bisnis yang berkelanjutan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-transparent" style="height: 510px; border: 2px solid gold; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                            <img src="{{ asset('img/nb3.png') }}" class="card-img-top p-4" alt="Placeholder Image">
                            <div class="card-body bg-transparent text-center text-white">
                                <h5 class="card-title">3R Limbah NB3</h5>
                                <h6 class="card-text text-white">10.442.808,52 Ton</h6>
                                <p class="card-text text-white">UT selalu berinovasi dalam mengatasi persampahan pada setiap lini bisnis dengan menerapkan program 6R</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="content-section mb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mt-5">
                        <img src="{{ asset('img/home-dashboard.jpg') }}" class="img-fluid rounded " alt="About Us">
                    </div>
                    <div class="col-lg-6 mt-5">
                        <h2><span class="custom-color" >Enviromental </span>Dashboard</h2>
                        <p>We provide comprehensive legal compliance services to ensure your business adheres to all relevant
                            laws and regulations. Our experienced team of legal professionals is here to help you navigate the
                            complex legal landscape and avoid potential pitfalls.</p>
                        <a href="{{ route('dashboard') }}" class="btn btn-warning">Lihat Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- flow Section -->
        <div id="services" class="content-section pt-5 pb-5">
            <div class="container">
                <h2 class="text-center mb-4">Pengelolaan <span class="custom-color">Lingkungan</span> </h2>
                <hr class="bg-success" style="margin: 0 auto 20px; width: 400px; border-width: 5px;">
                <div class="row pt-4">
                    <!-- Baris pertama -->
                    <div class="col-lg-3 mb-4">
                        <div class="card text-left" style="border-radius: 10px; min-height: 150px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 text-center mt-3">
                                        <img src="{{ asset('img/ppa.png') }}" alt="PPA" style="width: 80px; height: 80px;">
                                    </div>
                                    <div class="col-md-9 mt-2">
                                        <h6 class="card-title">PPA</h6>
                                        <p class="card-text">Pengendalian Pencemaran Air</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card text-left" style="border-radius: 10px; min-height: 150px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 text-center mt-3">
                                        <img src="{{ asset('img/ppu.png') }}" alt="PPA" style="width: 80px; height: 80px;">
                                    </div>
                                    <div class="col-md-9 mt-2">
                                        <h6 class="card-title">PPU</h6>
                                        <p class="card-text">Pengendalian Pencemaran Udara</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card text-left" style="border-radius: 10px; min-height: 150px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 text-center mt-3">
                                        <img src="{{ asset('img/plb3-2.png') }}" alt="PPA" style="width: 80px; height: 80px;">
                                    </div>
                                    <div class="col-md-9 mt-2">
                                        <h6 class="card-title">PLB3</h6>
                                        <p class="card-text">Pengendalian Limbah B3</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card text-left" style="border-radius: 10px; min-height: 150px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 text-center mt-3">
                                        <img src="{{ asset('img/plnb3.png') }}" alt="PPA" style="width: 80px; height: 80px;">
                                    </div>
                                    <div class="col-md-9 mt-2">
                                        <h6 class="card-title">PLNB3</h6>
                                        <p class="card-text">Pengendalian Limbah Non B3</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Baris kedua -->
                    <div class="col-lg-3 mb-4">
                        <div class="card text-left" style="border-radius: 10px; min-height: 150px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 text-center mt-3">
                                        <img src="{{ asset('img/legal.png') }}" alt="PPA" style="width: 80px; height: 80px;">
                                    </div>
                                    <div class="col-md-9 mt-2">
                                        <h6 class="card-title">Legal Compliance</h6>
                                        <p class="card-text">Legal Environment & Penerapan Peraturan Perundangan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card text-left" style="border-radius: 10px; min-height: 150px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 text-center mt-3">
                                        <img src="{{ asset('img/legal.png') }}" alt="PPA" style="width: 80px; height: 80px;">
                                    </div>
                                    <div class="col-md-9 mt-2">
                                        <h6 class="card-title">Eduro</h6>
                                        <p class="card-text">Edukasi Environment</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card text-left" style="border-radius: 10px; min-height: 150px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 text-center mt-3">
                                        <img src="{{ asset('img/vendor.png') }}" alt="PPA" style="width: 80px; height: 80px;">
                                    </div>
                                    <div class="col-md-9 mt-2">
                                        <h6 class="card-title">Evaluasi Vendor</h6>
                                        <p class="card-text">Penilaian Kinerja Vendor Dari Sisi Lingkungan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card text-left" style="border-radius: 10px; min-height: 150px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 text-center mt-3">
                                        <img src="{{ asset('img/utcm.png') }}" alt="PPA" style="width: 80px; height: 80px;">
                                    </div>
                                    <div class="col-md-9 mt-2">
                                        <h6 class="card-title">UTCM Directory</h6>
                                        <p class="card-text">Koordinasi Antar Unit Dalam Perusahaan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modul Section -->
        <div class="container">
            <h2 class="text-center mb-4">Ruang Media </h2>
            <hr class="bg-success" style="margin: 0 auto 20px; width: 400px; border-width: 5px;">
            <div class="row pt-5 pb-5">
                <div class="col-md-4">
                    <div class="card">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qR5-IBiWeqE" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qR5-IBiWeqE"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qR5-IBiWeqE"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="imageSlider" class="content-section pt-5 pb-5">
            <div class="container">
                <div class="row pt-5 pb-5">
                <h2 class="text-center mb-4">Penghargaan dalam Bidang Pengelolaan Lingkungan Hidup</h2>
                <hr style="margin: 0 auto 20px; width: 400px; border-width: 5px; background-color: rgb(232, 210, 10)">
                <div id="carouselExample" class="carousel slide mt-5 me-5" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card" style="height: 570px;">
                                        <img src="{{ asset('img/slider.jpg') }}" class="card-img-top" alt="Card 1">
                                        <div class="card-body bg-white text-center mt-2">
                                            <h5 class="card-title">Penghargaan Transparansi Emisi Korporasi Tahun 2022</h5>
                                            <p class="card-text">Beritasatu Media Holding, Majalah Investor, Bumi Global Karbon Foundation </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="height: 570px;">
                                        <img src="{{ asset('img/slider.jpg') }}" class="card-img-top" alt="Card 2">
                                        <div class="card-body bg-white text-center mt-2">
                                            <h5 class="card-title">Program Penilaian Peringkat Kinerja Perusahaan Tahun 2022</h5>
                                            <p class="card-text">Kementrian Lingkungan Hidup dan Kehutanan Republik Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="height: 570px;">
                                        <img src="{{ asset('img/slider.jpg') }}" class="card-img-top" alt="Card 3">
                                        <div class="card-body bg-white text-center mt-2">
                                            <h5 class="card-title">Penghargaan Corporate Emission Awards Tahun 2021</h5>
                                            <p class="card-text">Beritasatu Media Holdings & Bumi Global Karbon
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div id="imageSlider" class="content-section pt-5 pb-5">
            <div class="container">
                <h2 class="text-center mb-4">Environmental Facility</h2>
                <hr style="margin: 0 auto 20px; width: 400px; border-width: 5px; background-color: yellow !important">
                <div class="row pt-5 pb-5">
                    <div class="col-md-6">
                        <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/slider.jpg') }}" class="d-block w-100" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/slider1.jpg') }}" class="d-block w-100" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/slider2.jpg') }}" class="d-block w-100" alt="Third slide">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel1"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel1"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/slider.jpg') }}" class="d-block w-100" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/slider1.jpg') }}" class="d-block w-100" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/slider2.jpg') }}" class="d-block w-100" alt="Third slide">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel2"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel2"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
