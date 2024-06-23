@extends('Front.legal-compliance.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('Front.legal-compliance.topnav', ['title' => 'Add Licence Report'])

    <div class="container mt-5">
        <form action="{{ route('post-licence-report') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="row bg-white p-3 rounded">
                <div class="form-group col-md-6">
                    <label for="area">Area</label>
                    <input type="text" class="form-control" id="area" name="area" placeholder="Masukkan Area" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="tipe_bisnis">Tipe Bisnis</label>
                    <select class="form-control" id="tipe_bisnis" name="tipe_bisnis" required>
                        <option value="">Pilih Tipe Bisnis</option>
                        <option value="Cabang">Cabang</option>
                        <option value="Site">Site</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori" required>
                        <option value="">Pilih Kategori</option>
                        <option value="Environment">Environment</option>
                        <option value="Safety">Safety</option>
                        <option value="Health">Health</option>
                        <option value="Umum">Umum</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="klasifikasi">Klasifikasi</label>
                    <select class="form-control" id="klasifikasi" name="klasifikasi" required>
                        <option value="">Pilih Klasifikasi</option>
                        <option value="Izin Lingkungan">Izin Lingkungan</option>
                        <option value="Dokumen Lingkungan">Dokumen Lingkungan</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="tipe_izin">Tipe Izin</label>
                    <input type="text" class="form-control" id="tipe_izin" name="tipe_izin" placeholder="Masukkan Tipe Izin" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="nib">NIB</label>
                    <select class="form-control" id="nib" name="nib" required>
                        <option value="">Pilih NIB</option>
                        <option value="Tinggi">Tinggi</option>
                        <option value="Menengah Tinggi">Menengah Tinggi</option>
                        <option value="Menengah Rendah">Menengah Rendah</option>
                        <option value="Rendah">Rendah</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="nomor_izin">Nomor Izin</label>
                    <input type="text" class="form-control" id="nomor_izin" name="nomor_izin" placeholder="Masukkan Nomor Izin" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="tanggal_terbit_izin">Tanggal Terbit Izin</label>
                    <input type="date" class="form-control" id="tanggal_terbit_izin" name="tanggal_terbit_izin" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="tanggal_habis_izin">Tanggal Habis Izin</label>
                    <input type="date" class="form-control" id="tanggal_habis_izin" name="tanggal_habis_izin" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="">Pilih Status</option>
                        <option value="Masih Berlaku">Masih Berlaku</option>
                        <option value="Tidak Berlaku">Tidak Berlaku</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="status_perizinan">Status Perizinan</label>
                    <select class="form-control" id="status_perizinan" name="status_perizinan" required>
                        <option value="">Pilih Status Perizinan</option>
                        <option value="Izin Punya">Izin Punya</option>
                        <option value="Izin Tidak Punya">Izin Tidak Punya</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="status_db">Status DB</label>
                    <select class="form-control" id="status_db" name="status_db" required>
                        <option value="">Pilih Status DB</option>
                        <option value="Comply">Comply</option>
                        <option value="Not Comply">Not Comply</option>
                        <option value="Not Mandatory">Not Mandatory</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="status_lanjut">Status Lanjut</label>
                    <select class="form-control" id="status_lanjut" name="status_lanjut" required>
                        <option value="">Pilih Status Lanjut</option>
                        <option value="No Issue">No Issue</option>
                        <option value="On Progress">On Progress</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="progress">Progress</label>
                    <select class="form-control" id="progress" name="progress" required>
                        <option value="">Pilih Progress</option>
                        <option value="Arahan Dinas">Arahan Dinas</option>
                        <option value="Penawaran Konsultan">Penawaran Konsultan</option>
                        <option value="Proses Penawaran Cab/Site/PIN">Proses Penawaran Cab/Site/PIN</option>
                        <option value="Submit Dokumen">Submit Dokumen</option>
                        <option value="Verifikasi Lapangan">Verifikasi Lapangan</option>
                        <option value="Proses Sidang">Proses Sidang</option>
                        <option value="Izin Terbit">Izin Terbit</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="file">Upload File</label>
                    <input type="file" class="form-control" id="file" name="file" accept=".pdf">
                    <small class="text-muted">File must be in PDF format.</small>
                </div>
                <div class="form-group col-md-6">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan" nullable></textarea>
                </div>


                <div class="col-md-6 mt-auto align-items-right">
                    <button type="submit" class="btn btn-success float-right me-3">Submit</button>
                    <a href="{{route('licence-report')}}" class="btn btn-warning float-right">Cancel</a>
                </div>
            </div>
        </form>

    </div>
@endsection
