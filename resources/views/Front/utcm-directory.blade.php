
@extends('front.layout')

@section('content')
<!-- Hero Section -->
<div id="home" class="hero p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-md-1 order-2">
                <h4 class="mt-5 pt-4 custom-h4"><span class="custom-color">UTCM Directory </span> (Fasilitas Lingkungan UTCM)</h4>
                <p>United Tractors dengan penuh dedikasi menyajikan platform pembelajaran yang menyeluruh mengenai pengelolaan lingkungan. Mulai dari pemahaman mendalam terhadap risiko pencemaran lingkungan dari sisi internal maupun eksternal perusahaan hingga penyajian solusi inovatif untuk mengatasi berbagai tantangan lingkungan yang tengah dihadapi saat ini.</p>
            </div>
            <div class="col-md-4 order-md-2 order-1">
                <img src="img/utcm-directory.png" class="img-fluid" alt="utcm directory Image">
            </div>
        </div>
    </div>
    <div id="design" class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="img/cabang.png" class="img-fluid" alt="cabang img">
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
            <img src="img/hasil-kinerja.png" style="width: 100%" class="img-fluid" alt="Deskripsi Gambar">
        </div>
    </div>
</div>

@endsection