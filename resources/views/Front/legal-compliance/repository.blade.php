@extends('Front.legal-compliance.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('Front.legal-compliance.topnav', ['title' => 'Repository']),
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                     <div class="card-header pb-0 d-flex justify-content-between align-items-center pb-2">
                        <div class="input-group input-group-sm w-30">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                        <div class="justify-content-end">
                            <a class="me-3">
                                <i class="fa-solid fa-filter me-2"></i>
                                    Filter
                            </a>
                            <a class="me-3">
                                <i class="fa-solid fa-sort me-2"></i>
                                    Sort
                             </a>
                             <a href="" class="btn btn-sm btn-primary me-2 mt-2">
                                <i class="fa-sharp fa-solid fa-plus fa-xl me-2"></i>
                                    Add
                            </a>
                        </div>
                     </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table bg-white align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                           Title</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Year</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                                            Sub Category</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <i class="bi bi-file-pdf fs-3 me-3"></i>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                    <p class="text-xs text-secondary mb-0">upload 2 hours ago</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 text-sm">2024</h6>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xl  mb-0">Environment</p>
                                        </td>
                                        <td class="align-middle">
                                            <i class="bi bi-cloud-arrow-down text-success fs-4 me-2"></i>
                                            <i class="bi bi-pencil-square text-warning fs-4 me-2"></i>
                                            <i class="bi bi-trash text-danger fs-4 me-2"></i>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
