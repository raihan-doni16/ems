@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Home'])
    <div class="container-fluid py-4">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Content</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('home.kerja-edit-post') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $hasil->id }}">
                            <div class="form-group">
                                <label for="current_image">Current Image</label><br>
                                @if($hasil->img)
                                    <img src="{{ asset( $hasil->img) }}" alt="Current Image" style="max-width: 200px; max-height: 200px;">
                                @else
                                    <p>No image uploaded.</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="image">Change Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $hasil->title }}" placeholder="Enter title" required>
                            </div>
                            <div class="form-group">
                                <label for="subtitle">Subtitle</label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $hasil->subtitle }}" placeholder="Enter subtitle" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="5" placeholder="Enter description" required>{{ old('description', $hasil->description) }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
