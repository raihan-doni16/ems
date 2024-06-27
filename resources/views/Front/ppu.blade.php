
@extends('front.layout')

@section('content')
<!-- Hero Section -->
<div id="home" class="hero p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-md-1 order-2">
                <h4 class="mt-5 pt-4 custom-h4"><span class="custom-color">PPU</span> (Pengendalian Pencemaran Udara)</h4>
                <p>Pengendalian pencemaran udara adalah upaya penting yang melibatkan serangkaian strategi untuk mencegah dan mengurangi polusi udara. Beberapa metode efektif termasuk penghijauan dan reboisasi, penggunaan penyaring udara di pabrik, pemanfaatan energi alternatif yang ramah lingkungan, pengawasan hutan, dan pembatasan emisi industri yang bertujuan untuk memulihkan dan menjaga kualitas udara.</p>
            </div>
            <div class="col-md-4 order-md-2 order-1">
                <img src="{{ asset('img/ppu-img.png') }}" class="img-fluid" alt="PPU Image">
            </div>
        </div>
        <div id="services" class="content-section pt-5 pb-5">
            <div class="container">
                <div class="row pt-4">
                    <!-- Baris pertama -->
                    <div class="col-lg-6 mb-4">
                        <div class="card text-left" style="border-radius: 10px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <i class="bi bi-1-circle text-warning "style="font-size: 2rem;"></i>
                                    </div>
                                    <div class="col-md-9">
                                        <h6 class="card-title">Sumber Emisi Tidak Bergerak</h6>
                                        <p class="card-text">Pengukuran polusi atau emisi yang tetap berada di satu lokasi atau tidak bergerak. Contoh sumber emisi ini adalah pabrik, pembangkit listrik, atau instalasi lainnya.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card text-left" style="border-radius: 10px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <i class="bi bi-2-circle text-warning "style="font-size: 2rem;"></i>
                                    </div>
                                    <div class="col-md-9">
                                        <h6 class="card-title">Sumber Emisi Tidak Bergerak</h6>
                                        <p class="card-text">Pengukuran polusi atau emisi yang tetap berada di satu lokasi atau tidak bergerak. Contoh sumber emisi ini adalah pabrik, pembangkit listrik, atau instalasi lainnya.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card text-left" style="border-radius: 10px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <i class="bi bi-3-circle text-warning "style="font-size: 2rem;"></i>
                                    </div>
                                    <div class="col-md-9">
                                        <h6 class="card-title">Ambient Indoor</h6>
                                        <p class="card-text">Pengukuran kondisi di dalam ruangan yang meliputi parameter seperti suhu, kelembaban, kualitas udara dalam ruangan, dan faktor-faktor lain yang memengaruhi kenyamanan dan kesehatan di dalam ruangan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Baris kedua -->
                    <div class="col-lg-6 mb-4">
                        <div class="card text-left" style="border-radius: 10px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <i class="bi bi-4-circle text-warning "style="font-size: 2rem;"></i>
                                    </div>
                                    <div class="col-md-9">
                                        <h6 class="card-title">Ambient outdoor</h6>
                                        <p class="card-text">Pengukuran kondisi luar ruangan di luar banguna atau struktur tertentu yang mencakup udara terbuka, jalan, taman, dan area luar lainnya dimana orang dapat beraktivitast</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
<!-- Kegiatan Pengukuran Section -->
<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Kegiatan Pengukuran Tahun 2023</h2>
            <hr class="bg-success" style="margin: 0 auto 20px; width: 400px; border-width: 5px;">
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

<!-- Matriks Pengukuran Section -->
<div class="container mt-5 pt-5">
    <h2 class="text-center mb-4">Matriks Pengukuran</h2>
    <hr class="bg-success" style="margin: 0 auto 20px; width: 400px; border-width: 5px;">
    <div class="row mt-5">
        <div class="col-12">
            <img src="{{ asset('img/matriks-pengukuran.png') }}" style="width: 100%" class="img-fluid" alt="Matriks Pengukuran">
        </div>
    </div>
</div>
@endsection