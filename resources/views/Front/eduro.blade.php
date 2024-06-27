
@extends('front.layout')

@section('content')
<!-- Hero Section -->
<div id="home" class="hero p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-md-1 order-2">
                <h4 class="mt-5 pt-4 custom-h4"><span class="custom-color">Eduro</span>( Edukasi Enviro )</h4>
                <p>United Tractors dengan penuh dedikasi menyajikan platform pembelajaran yang menyeluruh mengenai pengelolaan lingkungan. Mulai dari pemahaman mendalam terhadap risiko pencemaran lingkungan dari sisi internal maupun eksternal perusahaan hingga penyajian solusi inovatif untuk mengatasi berbagai tantangan lingkungan yang tengah dihadapi saat ini.</p>
            </div>
            <div class="col-md-4 order-md-2 order-1">
                <img src="img/eduro.png" class="img-fluid" alt="eduro Image">
            </div>
        </div>
    </div>
</div>

<!-- Modul Section -->
<div id="imageSlider" class="content-section pt-5 pb-5">
    <div class="container">
        {{-- <h2 class="text-center mb-4">Modul Perizinan</h2>
        <hr style="margin: 0 auto 20px; width: 400px; border-width: 5px; background-color:rgb(232, 210, 10)"> --}}
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
<div id="imageSlider" class="content-section pt-5 pb-5">
    <div class="container">
        <div class="row pt-5 pb-5">
        <h2 class="text-center mb-4">Modul Pengelolaan Limbah</h2>
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
<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-12">
           {{--  <h2 class="text-center">Kegiatan Pengukuran Tahun 2023</h2>
            <hr class="bg-success" style="margin: 0 auto 20px; width: 400px; border-width: 5px;"> --}}
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('img/event-imgppu.png') }}" alt="Event Image 1" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">14 September 2023</h4>
                            <p class="card-text">Pemantauan Mutu Udara Ambien Outdoor pada 5 titik lokasi area kerja UT PPI Cakung</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('img/event2-imgppu.png') }}" alt="Event Image 2" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">14 September 2023</h4>
                            <p class="card-text">Pengujian sumber emisi tidak bergerak (Cerobong Genset) pada 15 titik lokasi area kerja UT PPI Cakung</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('img/event3-imgppu.png') }}" alt="Event Image 3" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">14 September 2023</h4>
                            <p class="card-text">Pemantauan Mutu Udara Ambien Indoor pada 13 titik lokasi area kerja UT PPI Cakung</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('img/event4-imgppu.png') }}" alt="Event Image 4" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">14 September 2023</h4>
                            <p class="card-text">Pengujian sumber emisi tidak bergerak (Cerobong Touch - Up) pada 1 titik lokasi area kerja UT PPI Cakung</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




