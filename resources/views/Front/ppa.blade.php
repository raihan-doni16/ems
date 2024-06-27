
@extends('front.layout')

@section('content')
<!-- Hero Section -->
<div id="home" class="hero p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-md-1 order-2">
                <h4 class="mt-5 pt-4 custom-h4"><span class="custom-color">PPA </span> (Pengendalian Pencemaran Air Limbah & Efisiensi Air Bersih)</h4>
                <p>Lorem ipsum dolor sit amet consectetur. Ipsum tortor mi viverra urna. Magna lacus nunc aliquet mauris nulla pellentesque volutpat eget vestibulum. Id lacus cursus sapien mollis neque nunc diam arcu. Dui parturient vulputate nec hendrerit aliquam erat. Justo rhoncus nisi cras semper purus vestibulum. Ullamcorper nulla ornare proin commodo nulla mattis etiam.</p>
            </div>
            <div class="col-md-4 order-md-2 order-1">
                <img src="img/ppa-img.png" class="img-fluid" alt="Legal Compliance Image">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="img/office.jpg" class="card-img-top" alt="Card 1 Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Office</h5>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="img/workshop.jpg" class="card-img-top" alt="Card 2 Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Workshop</h5>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="img/warehouse.jpg" class="card-img-top" alt="Card 3 Image">
                    <div class="card-body">
                        <h5 class="card-title text-Center">Warehouse</h5>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="img/sarana-pendukung.jpg" class="card-img-top" alt="Card 4 Image">
                    <div class="card-body">
                        <h5 class="card-title">Sarana Pendukung</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- legal dashboard -->
<div id="about" class="content-section mb-3">
    <div class="container mt-5 pt-5 pb-5">
        <h2>Pengelolaan<span class="custom-color"> Air Limbah</span></h2>
        <p>We provide comprehensive legal compliance services to ensure your business adheres to all relevant
            laws and regulations. Our experienced team of legal professionals is here to help you navigate the
            complex legal landscape and avoid potential pitfalls.</p>
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card">
                    <img src="img/office.jpg" class="card-img-top" alt="Card 1 Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Office</h5>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="img/workshop.jpg" class="card-img-top" alt="Card 2 Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Workshop</h5>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="img/warehouse.jpg" class="card-img-top" alt="Card 3 Image">
                    <div class="card-body">
                        <h5 class="card-title text-Center">Warehouse</h5>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="img/sarana-pendukung.jpg" class="card-img-top" alt="Card 4 Image">
                    <div class="card-body">
                        <h5 class="card-title">Sarana Pendukung</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- flow Section -->
<div class="container  pt-5">
    <h2 class="text-center mb-4">Matriks Pemantauan Air Limbah </h2>
    <hr class="bg-success" style="margin: 0 auto 20px; width: 400px; border-width: 5px;">
    <div class="row mt-5">
        <div class="col-12">
            <img src="img/matriks.png" style="width: 100%" class="img-fluid" alt="Deskripsi Gambar">
        </div>
    </div>
</div>


<!-- Modul Section -->
<div class="container  pt-5 pb-5">
    <h2 class="text-center mb-4">Pengelolaan Air Bersih </h2>
    <hr class="bg-success" style="margin: 0 auto 20px; width: 400px; border-width: 5px;">
    <p>We provide comprehensive legal compliance services to ensure your business adheres to all relevant
        laws and regulations. Our experienced team of legal professionals is here to help you navigate the
        complex legal landscape and avoid potential pitfalls.</p>
    <div class="row mt-5">
        <div class="col-12 text-center">
            <img src="img/air-bersih.png" style="width: 70%" class="img-fluid" alt="Deskripsi Gambar">
        </div>
    </div>
</div>

@endsection