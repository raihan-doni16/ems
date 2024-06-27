
@extends('front.layout')

@section('content')
<!-- Hero Section -->
<div id="home" class="hero p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-md-1 order-2">
                <h4 class="mt-5 pt-4 custom-h4"><span class="custom-color">PLNB3 </span> (Pengelolaan Limbah Non B3)</h4>
                <p>Sebagai perusahaan yang berkomitmen pada keberlanjutan, UT melakukan berbagai solusi inovatif dengan pendekatan pengelolaan limbah untuk meminimalkan dampak negatif terhadap lingkungan.</p>
            </div>
            <div class="col-md-4 order-md-2 order-1">
                <img src="img/plnb3.png" class="img-fluid" alt="PLNB3 Image">
            </div>
        </div>
    </div>
    <div id="design" class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="img/6R.png" class="img-fluid" alt="6R Activities Design">
                </div>
            </div>
        </div>
    </div>

<!-- flow Section -->
<div class="container  pt-5">
    {{-- <h2 class="text-center mb-4">UT Solid Waste Journey </h2>
    <hr class="bg-success" style="margin: 0 auto 20px; width: 400px; border-width: 5px;"> --}}
    <div class="row mt-5">
        <div class="col-12">
            <img src="img/waste-journey.png" style="width: 100%" class="img-fluid" alt="Deskripsi Gambar">
        </div>
    </div>
</div>

<div id="imageSlider" class="content-section pt-5 pb-5">
    <div class="container">
        <div class="row pt-5 pb-5">
        <h2 class="text-center mb-4">Waste Manangement Highlights</h2>
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

@endsection