@extends('Front.legal-compliance.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('Front.legal-compliance.topnav', ['title' => 'Edit Licence Report'])

    <div class="container mt-5">
        <form action="{{ route('post-edit-licence-report') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">
            <div class="row bg-white p-3 rounded">
                <div class="form-group col-md-6">
                    <label for="area">Area</label>
                    <input type="text" class="form-control" id="area" name="area" placeholder="Masukkan Area" value="{{$data->area}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="tipe_bisnis">Tipe Bisnis</label>
                    <select class="form-control" id="tipe_bisnis" name="tipe_bisnis">
                        <option value="Cabang" {{ $data->tipe_bisnis == 'Cabang' ? 'selected' : '' }}>Cabang</option>
                        <option value="Site" {{ $data->tipe_bisnis == 'Site' ? 'selected' : '' }}>Site</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori">
                        <option value="Environment" {{ $data->kategori == 'Environment' ? 'selected' : '' }}>Environment</option>
                        <option value="Safety"{{ $data->kategori == 'Safety' ? 'selected' : '' }}>Safety</option>
                        <option value="Health"{{ $data->kategori == 'Health' ? 'selected' : '' }}>Health</option>
                        <option value="Umum"{{ $data->kategori == 'Umum' ? 'selected' : '' }}>Umum</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="klasifikasi">Klasifikasi</label>
                    <select class="form-control" id="klasifikasi" name="klasifikasi">
                        <option value="Izin Lingkungan"{{ $data->klasifikasi == 'Izin Lingkungan' ? 'selected' : '' }}>Izin Lingkungan</option>
                        <option value="Dokumen Lingkungan" {{ $data->klasifikasi == 'Dokumen Lingkungan' ? 'selected' : '' }}>Dokumen Lingkungan</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="tipe_izin">Tipe Izin</label>
                    <input type="text" class="form-control" id="tipe_izin" name="tipe_izin" placeholder="Masukkan Tipe Izin" value="{{$data->tipe_izin}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="nib">NIB</label>
                    <select class="form-control" id="nib" name="nib">
                        <option value="Tinggi" {{ $data->nib== 'Tinggi' ? 'selected' : '' }}>Tinggi</option>
                        <option value="Menengah Tinggi"{{ $data->nib== 'Menengah Tinggi' ? 'selected' : '' }}>Menengah Tinggi</option>
                        <option value="Menengah Rendah"{{ $data->nib== 'Menengah Rendah' ? 'selected' : '' }}>Menengah Rendah</option>
                        <option value="Rendah" {{ $data->nib== 'Rendah' ? 'selected' : '' }}>Rendah</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="nomor_izin">Nomor Izin</label>
                    <input type="text" class="form-control" id="nomor_izin" name="nomor_izin" placeholder="Masukkan Nomor Izin" value="{{$data->nomor_izin}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="tanggal_terbit_izin">Tanggal Terbit Izin</label>
                    <input type="date" class="form-control" id="tanggal_terbit_izin" name="tanggal_terbit_izin" value="{{$data->tanggal_terbit_izin}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="tanggal_habis_izin">Tanggal Habis Izin</label>
                    <input type="date" class="form-control" id="tanggal_habis_izin" name="tanggal_habis_izin" value="{{$data->tanggal_habis_izin}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="Masih Berlaku"{{ $data->status== 'Masih Berlaku' ? 'selected' : '' }}>Masih Berlaku</option>
                        <option value="Tidak Berlaku"{{ $data->status== 'Tidak Berlaku' ? 'selected' : '' }}>Tidak Berlaku</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="status_perizinan">Status Perizinan</label>
                    <select class="form-control" id="status_perizinan" name="status_perizinan">
                        <option value="Izin Punya" {{ $data->status_perizinan== 'Izin Punya' ? 'selected' : '' }}>Izin Punya</option>
                        <option value="Izin Tidak Punya"{{ $data->status_perizinan== 'Izin Tidak Punya' ? 'selected' : '' }}>Izin Tidak Punya</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="status_db">Status DB</label>
                    <select class="form-control" id="status_db" name="status_db">
                        <option value="Comply"{{ $data->status_db== 'Comply' ? 'selected' : '' }}>Comply</option>
                        <option value="Not Comply"{{ $data->status_db== 'Not Comply' ? 'selected' : '' }}>Not Comply</option>
                        <option value="Not Mandatory" {{ $data->status_db== 'Not Mandatory' ? 'selected' : '' }}>Not Mandatory</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="status_lanjut">Status Lanjut</label>
                    <select class="form-control" id="status_lanjut" name="status_lanjut">
                        <option value="No Issue"{{ $data->status_lanjut== 'No Issue' ? 'selected' : '' }}>No Issue</option>
                        <option value="On Progress"{{ $data->status_lanjut== 'On Progress' ? 'selected' : '' }}>On Progress</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="progress">Progress</label>
                    <select class="form-control" id="progress" name="progress" required>
                        <option value="Arahan Dinas"{{ $data->progress== 'Arahan Dinas' ? 'selected' : '' }}>Arahan Dinas</option>
                        <option value="Penawaran Konsultan"{{ $data->progress== 'Penawaran Konsultan' ? 'selected' : '' }}>Penawaran Konsultan</option>
                        <option value="Proses Penawaran Cab/Site/PIN"{{ $data->progress== 'Proses Penawaran Cab/Site/PIN' ? 'selected' : '' }}>Proses Penawaran Cab/Site/PIN</option>
                        <option value="Submit Dokumen"{{ $data->progress== 'Submit Dokumen' ? 'selected' : '' }}>Submit Dokumen</option>
                        <option value="Verifikasi Lapangan"{{ $data->progress== 'Verifikasi Lapangan' ? 'selected' : '' }}>Verifikasi Lapangan</option>
                        <option value="Proses Sidang"{{ $data->progress== 'Proses Sidang' ? 'selected' : '' }}>Proses Sidang</option>
                        <option value="Izin Terbit"{{ $data->progress== 'Izin Terbit' ? 'selected' : '' }}>Izin Terbit</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="file">Upload File</label>
                    @if(isset($data->file))
                        <p>Current file: <a href="{{ url($data->file) }}" target="_blank">{{ $data->file }}</a></p>
                    @endif
                    <input type="file" class="form-control" id="file" name="file"
                     accept=".pdf">
                </div>
                <div class="form-group col-md-6">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan">{{$data->keterangan}}</textarea>
                </div>

                <div class="col-md-6 mt-auto align-items-right">
                    <button type="submit" class="btn btn-success float-right me-3">Submit</button>
                    <a href="{{route('licence-report')}}" class="btn btn-warning float-right">Cancel</a>
                </div>
            </div>
        </form>

    </div>
@endsection
