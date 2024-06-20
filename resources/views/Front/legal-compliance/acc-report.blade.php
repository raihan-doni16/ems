@extends('Front.legal-compliance.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Approve Report'])
    <div class="container-fluid py-4">
        <div class="row">
            <!-- Submitted Section -->
            <div class="col-md-6 kanban-col">
                <div class="card mb-4">
                    <div class="card-header justify-content pb-0 text-center">
                        <h6 class="bg-warning p-2 bg-opacity-75 rounded-pill">Submitted</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="row">
                            @foreach ($licenceReport as $data )
                            @if ($data->approve == '0')
                            <div class="col-md-5 kanban-card card m-4 position-relative">
                                <div class="card-body">
                                    <div class="badge-container position-absolute top-0 end-0 m-2 d-flex">
                                        <span class="badge badge-sm me-2 "style="background-color: rgba(255, 255, 0, 0.5)">{{$data->kategori}}</span>
                                        <span class="badge badge-sm " style="background-color: rgba(0, 255, 30, 0.5)">{{$data->tipe_bisnis}}</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-4">
                                        <div class="rounded-circle  me-2" style="background-color: rgba(255, 255, 0, 0.5);">
                                            <i class="bi bi-file-pdf text-black fs-2 m-2"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 text-sm">{{$data->area}}</h6>
                                            <p class="text-xs text-secondary mb-0">{{$data->nomor_izin}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Approve Section -->
            <div class="col-md-6 kanban-col">
                <div class="card mb-4">
                    <div class="card-header justify-content pb-0 text-center">
                        <h6 class="bg-success p-2 bg-opacity-75 rounded-pill">Approve</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="row">
                            @foreach ($licenceReport as $data )
                                @if ($data->approve == '1')
                                    <div class="col-md-5 kanban-card card m-4 position-relative">
                                        <div class="card-body">
                                            <div class="badge-container position-absolute top-0 end-0 m-2 d-flex">
                                                <span class="badge badge-sm me-2 "style="background-color: rgba(255, 255, 0, 0.5)">{{$data->kategori}}</span>
                                                <span class="badge badge-sm " style="background-color: rgba(0, 255, 30, 0.5)">{{$data->tipe_bisnis}}</span>
                                            </div>
                                            <div class="d-flex align-items-center mt-4">
                                                <div class="rounded-circle  me-2" style="background-color: rgba(255, 255, 0, 0.5);">
                                                    <i class="bi bi-file-pdf text-black fs-2 m-2"></i>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-0 text-sm">{{$data->area}}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{$data->nomor_izin}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
