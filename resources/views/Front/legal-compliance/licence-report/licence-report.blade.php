@extends('Front.legal-compliance.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('Front.legal-compliance.topnav',  ['title' => 'Licence Report'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="d-flex justify-content-end pe-4">
                {{-- <a href="" class="btn btn-success m-2"><i class="bi bi-filetype-pdf me-2"></i> PDF</a>
                <a href="" class="btn btn-success m-2"><i class="bi bi-filetype-csv me-2"></i> CSV</a> --}}
                <a href="{{route('add-licence-report')}}" class="btn btn-warning m-2"><i class="fa-solid fa-plus fa-lg me-2" style="color: #fafafa;"></i> New Licence</a>
            </div>
        </div>
        <div class="row bg-white p-3 rounded">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <div class="card-header pb-0 d-flex justify-content-between align-items-center" >
                                        <thead class="table align-items-center mb-0">
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pt-4 pb-4 text-center">Area</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pt-4 pb-4 text-center">Tipe Bisnis</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pt-4 pb-4 text-center">Kategori</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pt-4 pb-4 text-center">Klasifikasi</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pt-4 pb-4 text-center">Tipe Izin</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pt-4 pb-4 text-center">NIB</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pt-4 pb-4 text-center">Nomor Izin</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pt-4 pb-4 text-center">Tanggal Mulai Izin</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pt-4 pb-4 text-center">Tanggal Habis Izin</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pt-4 pb-4 text-center">Status</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pt-4 pb-4 text-center">Status Perizinan</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pt-4 pb-4 text-center">Status DB</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pt-4 pb-4 text-center">Status Lanjut</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pt-4 pb-4 text-center">Progress</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pt-4 pb-4 text-center">Keterangan</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pt-4 pb-4 text-center"></th>
                                            </tr>
                                        </thead>
                                    </div>
                                </div>
                                <tbody>
                                   @foreach ($licenceReport as $data )
                                        <tr>
                                            <td>
                                            <h6 class="text-sm text-center m-2">{{$data->area}}</h6>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold text-center m-2">{{$data->tipe_bisnis}}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold text-center  m-2 ">{{$data->kategori}}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold text-center  m-2 ">{{$data->klasifikasi}}</p>
                                            </td>
                                            <td>
                                                <p class="text-sm text-center m-2">{{$data->tipe_izin}}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold text-center m-2">{{$data->nib}}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold text-center  m-2 ">{{$data->nomor_izin}}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold text-center  m-2 ">{{$data->tanggal_terbit_izin}}</p>
                                            </td>
                                            <td>
                                                <p class="text-sm text-center m-2">{{$data->tanggal_habis_izin}}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold text-center m-2">{{$data->status}} </p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold text-center  m-2 ">{{$data->status_perizinan}}</p>
                                            </td>
                                            <td class="align-middle text-center text-sm  ">
                                                @if ($data->status_db == 'Comply')
                                                <span class="badge badge-sm bg-gradient-success  m-2">{{$data->status_db}}</span>
                                                @elseif ($data->status_db == 'Not Comply')
                                                <span class="badge badge-sm bg-gradient-danger  m-2">{{$data->status_db}}</span>
                                                @else
                                                <span class="badge badge-sm bg-gradient-warning m-2">{{$data->status_db}}</span>
                                                @endif

                                            </td>
                                            <td class="align-top text-center text-sm">
                                                <div class="d-flex align-items-center justify-content-center m-2">
                                                    <p class="text-xs font-weight-bold m-2">{{$data->status_lanjut}}</p>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm  ">
                                                <p class="text-xs font-weight-bold text-center  m-2 ">{{$data->progress}}</p>
                                            </td>
                                            <td class="align-middle text-center text-sm  ">
                                                <p class="text-xs font-weight-bold text-center  m-2 ">{{$data->keterangan}}</p>
                                            </td>

                                            <td class="align-middle">
                                                <a href="{{ route('edit-licence-report', ['id' => $data->id])}}" class="text-secondary font-weight-bold text-xs " >
                                                    <i class="fa-regular fa-pen-to-square fa-lg me-3" style="color: #FFD43B;"></i>

                                                </a>
                                                <a href="javascript:void(0);" class="text-secondary font-weight-bold text-xs" onclick="confirmDelete('{{ route('delete-licence-report', ['id' => $data->id]) }}')">
                                                    <i class="fa-solid fa-trash fa-lg me-3" style="color: #b02503;"></i>
                                                </a>
                                            </td>

                                        </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-start  ms-2 mt-3">
                            {{($licenceReport->links())}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




