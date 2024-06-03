@extends('front.layout')

@section('content')
    <!-- Hero Section -->
    <div id="home" class="hero p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-md-1 order-2">
                    <h4 class="mt-5 pt-4 custom-h4"><span class="custom-color">ENVIRONMENT</span> MANAGEMENT SYSTEM</h4>
                    <p>Lorem ipsum dolor sit amet consectetur. Ipsum tortor mi viverra urna. Magna lacus nunc aliquet mauris
                        nulla pellentesque volutpat eget vestibulum. Id lacus cursus sapien mollis neque nunc diam arcu. Dui
                        parturient vulputate nec hendrerit aliquam erat. Justo rhoncus nisi cras semper purus vestibulum.
                        Ullamcorper nulla ornare proin commodo nulla mattis etiam.</p>
                </div>
                <div class="col-md-4 order-md-2 order-1">
                    <img src="img/home-img.png" class="img-fluid" alt="Legal Compliance Image">
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 240" class="wave">
        <path fill="000000" fill-opacity="0.25"
            d="M0,64L80,53.3C160,43,320,21,480,18.7C640,16,800,32,960,53.3C1120,75,1280,96,1360,106.7L1440,117L1440,240L1360,240C1280,240,1120,240,960,240C800,240,640,240,480,240C320,240,160,240,80,240L0,240Z">
        </path>
        <path fill="000000" fill-opacity="0.25"
            d="M0,128L80,106.7C160,85,320,43,480,16C640,-11,800,-2,960,14.7C1120,31,1280,53,1360,74L1440,95L1440,240L1360,240C1280,240,1120,240,960,240C800,240,640,240,480,240C320,240,160,240,80,240L0,240Z">
        </path>
    </svg>



    <!-- legal dashboard -->
    <div id="home-bg" class="content-section mb-3 "style="background-image: url('{{asset('img/bg-footer.png')}}'); background-size: auto; background-repeat: no-repeat; background-position: bottom;"">
        <div class="container pt-5">
            <h3 class="text-center mb-4">Hasil Program Kinerja Perusahaan bidang Lingkungan Hidup Periode Juni 2022
                s.d Juli 2023</h3>
            <hr class="bg-success" style="margin: 0 auto 20px; width: 400px; border-width: 5px;">
            <div class="row pt-5 pb-5">
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Placeholder Image">
                        <div class="card-body">
                            <h5 class="card-title">Title 1</h5>
                            <p class="card-text">Subtitle 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Placeholder Image">
                        <div class="card-body">
                            <h5 class="card-title">Title 2</h5>
                            <p class="card-text">Subtitle 2</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Placeholder Image">
                        <div class="card-body">
                            <h5 class="card-title">Title 3</h5>
                            <p class="card-text">Subtitle 3</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Placeholder Image">
                        <div class="card-body">
                            <h5 class="card-title">Title 4</h5>
                            <p class="card-text">Subtitle 4</p>
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
                    <img src="{{ asset('img/home-dashboard.jpg') }}" class="img-fluid rounded" alt="About Us">
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
                <div class="col-lg-4 mb-4">
                    <div class="card text-left" style="border-radius: 10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <i class="bi bi-1-circle text-warning "style="font-size: 2rem;"></i>
                                </div>
                                <div class="col-md-9">
                                    <h6 class="card-title">Compliance Audits</h6>
                                    <p class="card-text">We conduct</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card text-left" style="border-radius: 10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <i class="bi bi-2-circle text-warning "style="font-size: 2rem;"></i>
                                </div>
                                <div class="col-md-9">
                                    <h6 class="card-title">Compliance Audits</h6>
                                    <p class="card-text">We conduct</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card text-left" style="border-radius: 10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <i class="bi bi-3-circle text-warning "style="font-size: 2rem;"></i>
                                </div>
                                <div class="col-md-9">
                                    <h6 class="card-title">Compliance Audits</h6>
                                    <p class="card-text">We conduct</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Baris kedua -->
                <div class="col-lg-4 mb-4">
                    <div class="card text-left" style="border-radius: 10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <i class="bi bi-4-circle text-warning "style="font-size: 2rem;"></i>
                                </div>
                                <div class="col-md-9">
                                    <h6 class="card-title">Compliance Audits</h6>
                                    <p class="card-text">We conduct</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card text-left" style="border-radius: 10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <i class="bi bi-5-circle text-warning "style="font-size: 2rem;"></i>
                                </div>
                                <div class="col-md-9">
                                    <h6 class="card-title">Compliance Audits</h6>
                                    <p class="card-text">We conduct</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card text-left" style="border-radius: 10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <i class="bi bi-6-circle text-warning "style="font-size: 2rem;"></i>
                                </div>
                                <div class="col-md-9">
                                    <h6 class="card-title">Compliance Audits</h6>
                                    <p class="card-text">We conduct</p>
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
                    <div class="card-body">
                        <h5 class="card-title">Video Title 1</h5>
                        <p class="card-text">Video Subtitle 1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qR5-IBiWeqE"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Video Title 2</h5>
                        <p class="card-text">Video Subtitle 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qR5-IBiWeqE"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Video Title 3</h5>
                        <p class="card-text">Video Subtitle 3</p>
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
                                <div class="card">
                                    <img src="{{ asset('img/slider.jpg') }}" class="card-img-top" alt="Card 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Card 1</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{ asset('img/slider.jpg') }}" class="card-img-top" alt="Card 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Card 2</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{ asset('img/slider.jpg') }}" class="card-img-top" alt="Card 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Card 3</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
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
