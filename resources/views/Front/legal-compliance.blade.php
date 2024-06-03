
@extends('front.layout')

@section('content')
<!-- Hero Section -->
<div id="home" class="hero p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-md-1 order-2">
                <h4 class="mt-5 pt-4 custom-h4"><span class="custom-color">Legal</span> Compliance</h4>
                <p>Lorem ipsum dolor sit amet consectetur. Ipsum tortor mi viverra urna. Magna lacus nunc aliquet mauris nulla pellentesque volutpat eget vestibulum. Id lacus cursus sapien mollis neque nunc diam arcu. Dui parturient vulputate nec hendrerit aliquam erat. Justo rhoncus nisi cras semper purus vestibulum. Ullamcorper nulla ornare proin commodo nulla mattis etiam.</p>
            </div>
            <div class="col-md-4 order-md-2 order-1">
                <img src="img/legal-img.png" class="img-fluid" alt="Legal Compliance Image">
            </div>
        </div>
    </div>
</div>

<!-- legal dashboard -->
<div id="about" class="content-section mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('img/legal-dash.png')}}" class="img-fluid" alt="About Us">
            </div>
            <div class="col-lg-6 mt-5">
                <h2>Legal Compliance <span>Dashboard</span></h2>
                <p>We provide comprehensive legal compliance services to ensure your business adheres to all relevant laws and regulations. Our experienced team of legal professionals is here to help you navigate the complex legal landscape and avoid potential pitfalls.</p>
                <a href="{{route('dashboard')}}" class="btn btn-warning">Lihat Sekarang</a>
            </div>
        </div>
    </div>
</div>

<!-- flow Section -->
<div id="services" class="content-section pt-5 pb-5">
    <div class="container">
        <h2 class="text-center mb-4">Flow Proses Pengurusan Perizinan</h2>
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
<div id="imageSlider" class="content-section pt-5 pb-5">
    <div class="container">
        <h2 class="text-center mb-4">Modul Perizinan</h2>
        <hr style="margin: 0 auto 20px; width: 400px; border-width: 5px; background-color:rgb(232, 210, 10)">
        <div id="carouselExampleIndicators" class="carousel slide pt-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/slider.jpg')}}" class="d-block w-100" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/slider1.jpg')}}" class="d-block w-100" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src={{asset('img/slider2.jpg')}} class="d-block w-100" alt="Third slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

@endsection




