@extends('Front.legal-compliance.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('Front.legal-compliance.topnav', ['title' => 'Add Repository'])

    <div class="container mt-5">
        <form action="{{ route('post-repository') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="row bg-white p-3 rounded">
                <div class="form-group col-md-12">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Judul" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="category">Kategori</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="Masukkan Kategori" required>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="year">Tahun</label>
                    <input type="year" class="form-control" id="year" name="year" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="file">Upload File</label>
                    <input type="file" class="form-control" id="file" name="file" accept=".pdf">
                    <small class="text-muted">File must be in PDF format.</small>
                </div>

                <div class="col-md-6 mt-auto align-items-right">
                    <button type="submit" class="btn btn-success float-right me-3">Submit</button>
                    <a href="{{route('repository')}}" class="btn btn-warning float-right">Cancel</a>
                </div>
            </div>
        </form>

    </div>
@endsection
