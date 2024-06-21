@extends('Front.legal-compliance.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('Front.legal-compliance.topnav', ['title' => 'Approve Report'])
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
                            @foreach ($licenceReport as $data)
                            @if ($data->approve == '0')
                            <div class="col-md-5 kanban-card card ms-4 mb-2" data-bs-toggle="modal" data-bs-target="#approvalModal{{$data->id}}">
                                <div class="card-body">
                                    <div class="badge-container position-absolute top-0 end-0 m-2 d-flex">
                                        <span class="badge badge-sm me-2" style="background-color: rgba(255, 255, 0, 0.5)">{{$data->kategori}}</span>
                                        <span class="badge badge-sm" style="background-color: rgba(0, 255, 30, 0.5)">{{$data->tipe_bisnis}}</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-4">
                                        <div class="rounded-circle me-2" style="background-color: rgba(255, 255, 0, 0.5);">
                                            <i class="bi bi-file-pdf text-black fs-2 m-2"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 text-sm">{{$data->area}}</h6>
                                            <p class="text-xs text-secondary mb-0">{{$data->nomor_izin}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- Approval Modal -->
                             <div class="modal " id="approvalModal{{$data->id}}" tabindex="-1" aria-labelledby="approvalModalLabel{{$data->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="approvalModalLabel{{$data->id}}">Approval Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="text-center">
                                                        <embed src="{{$data->file}}" type="application/pdf" width="100%" height="500px">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <form action="{{ route('post-edit-licence-report') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                                                        <div class="mt-4">
                                                            <input type="hidden" name="approve" id="approve" value=1>
                                                            <label for="branch">Branch</label>
                                                            <input type="text" class="form-control" id="branch" name="branch" value="{{$data->area}}" disabled>
                                                            <label for="branch">Kategori</label>
                                                            <input type="text" class="form-control" id="branch" name="branch" value="{{$data->kategori}}" disabled>
                                                            <label for="branch">Klasifikasi</label>
                                                            <input type="text" class="form-control" id="branch" name="branch" value="{{$data->klasifikasi}}" disabled>
                                                            <label for="branch">Tanggal Mulai Izin</label>
                                                            <input type="text" class="form-control" id="branch" name="branch" value="{{$data->tanggal_terbit_izin}}" disabled>
                                                            <label for="branch">Tanggal Habis Izin</label>
                                                            <input type="text" class="form-control" id="branch" name="branch" value="{{$data->tanggal_habis_izin}}" disabled>
                                                            <label for="keterangan">Keterangan</label>
                                                            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Approve</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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
                            @foreach ($licenceReport as $data)
                            @if ($data->approve == '1')
                            <div class="col-md-5 ms-4 mb-2 kanban-card card  position-relative">
                                <div class="card-body">
                                    <div class="badge-container position-absolute top-0 end-0 m-2 d-flex">
                                        <span class="badge badge-sm me-2" style="background-color: rgba(255, 255, 0, 0.5)">{{$data->kategori}}</span>
                                        <span class="badge badge-sm" style="background-color: rgba(0, 255, 30, 0.5)">{{$data->tipe_bisnis}}</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-4">
                                        <div class="rounded-circle me-2" style="background-color: rgba(255, 255, 0, 0.5);">
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
