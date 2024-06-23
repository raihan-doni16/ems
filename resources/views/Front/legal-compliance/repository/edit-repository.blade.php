@extends('Front.legal-compliance.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('Front.legal-compliance.topnav', ['title' => 'Edit Repository'])

    <div class="container mt-5">
        <form action="{{route('save-repository')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $repo->id }}">
            <div class="row bg-white p-3 rounded">
                <div class="form-group col-md-12">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Judul" value="{{$repo->name}}" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="category">Kategori</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="Masukkan Kategori" value="{{$repo->category}}" required>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="year">Tahun</label>
                    <input type="year" class="form-control" id="year" name="year" value="{{$repo->year}}" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="file">Upload File</label>
                    @if(isset($repo->file))
                        <p>Current file: <a href="{{ url($repo->file) }}" target="_blank">{{ $repo->file }}</a></p>
                    @endif
                    <input type="file" class="form-control" id="file" name="file"
                     accept=".pdf">
                </div>

                <div class="col-md-6 mt-auto align-items-right">
                    <button type="submit" class="btn btn-success float-right me-3">Submit</button>
                    <a href="{{route('repository')}}" class="btn btn-warning float-right">Cancel</a>
                </div>
            </div>
        </form>

    </div>
@endsection
