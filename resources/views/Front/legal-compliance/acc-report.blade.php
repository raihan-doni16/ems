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
                            <div class="col-md-5 kanban-card card m-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                                        </div>
                                    </div>
                                    <p class="text-xs font-weight-bold mb-0">Programator</p>
                                    <p class="text-xs text-secondary mb-0">Developer</p>
                                    <div class="text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                                    </div>
                                    <div class="text-right">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 kanban-card card mt-4 mb-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                                        </div>
                                    </div>
                                    <p class="text-xs font-weight-bold mb-0">Programator</p>
                                    <p class="text-xs text-secondary mb-0">Developer</p>
                                    <div class="text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                                    </div>
                                    <div class="text-right">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 kanban-card card m-4 mt-1">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                                        </div>
                                    </div>
                                    <p class="text-xs font-weight-bold mb-0">Programator</p>
                                    <p class="text-xs text-secondary mb-0">Developer</p>
                                    <div class="text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                                    </div>
                                    <div class="text-right">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 kanban-card card mt-1 mb-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                                        </div>
                                    </div>
                                    <p class="text-xs font-weight-bold mb-0">Programator</p>
                                    <p class="text-xs text-secondary mb-0">Developer</p>
                                    <div class="text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                                    </div>
                                    <div class="text-right">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">Edit</a>
                                    </div>
                                </div>
                            </div>
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
                            <div class="col-md-5 kanban-card card  ms-4 m-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                                        </div>
                                    </div>
                                    <p class="text-xs font-weight-bold mb-0">Programator</p>
                                    <p class="text-xs text-secondary mb-0">Developer</p>
                                    <div class="text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                                    </div>
                                    <div class="text-right">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 kanban-card card mt-4 mb-4 me-3">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                                        </div>
                                    </div>
                                    <p class="text-xs font-weight-bold mb-0">Programator</p>
                                    <p class="text-xs text-secondary mb-0">Developer</p>
                                    <div class="text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                                    </div>
                                    <div class="text-right">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 kanban-card card m-4 mt-1 ">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                                        </div>
                                    </div>
                                    <p class="text-xs font-weight-bold mb-0">Programator</p>
                                    <p class="text-xs text-secondary mb-0">Developer</p>
                                    <div class="text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                                    </div>
                                    <div class="text-right">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 kanban-card card mt-1 mb-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                                        </div>
                                    </div>
                                    <p class="text-xs font-weight-bold mb-0">Programator</p>
                                    <p class="text-xs text-secondary mb-0">Developer</p>
                                    <div class="text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                    </div>
                                    <div class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                                    </div>
                                    <div class="text-right">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
