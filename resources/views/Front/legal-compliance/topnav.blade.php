<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"
        data-scroll="false">
    <div class="container-fluid py-1 px-3">
            <h6 class=" nav-text mb-0">{{ $title }}</h6>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                @if ($title == 'Dashboard')
                <div class="input-group me-3 mt-2">
                    <span class="input-group-text" id="icon-addon1"><i class="bi bi-check-circle"></i></span>
                    <select id="selectStatus" class="form-select" style="width: 150px" onchange="this.form.submit()" name="status">
                        <option value="">Select Status</option>
                        @foreach ($filter_status as $data)
                            <option value="{{ $data->status }}" {{ request()->status == $data->status ? 'selected' : '' }}>
                                {{ $data->status }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group me-3 mt-2">
                    <span class="input-group-text" id="icon-addon2"><i class="bi bi-geo-alt"></i></span>
                    <select id="selectArea" class="form-select" style="width: 150px" onchange="this.form.submit()" name="area">
                        <option value="">Select Area</option>
                        @foreach ($filter_area as $data)
                            <option value="{{ $data->area }}" {{ request()->area == $data->area ? 'selected' : '' }}>
                                {{ $data->area }}
                            </option>
                        @endforeach
                    </select>
                </div>



                @endif
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link  p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner me-3">
                            <i class="fa-solid fa-bars fa-xl" style="color: #74C0FC;"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown pe-2 d-flex align-items-center me-3">
                    <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-regular fa-bell fa-xl" style="color: #74C0FC;"></i>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                        aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="./img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New message</span> from Laur
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            13 minutes ago
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="./img/small-logos/logo-spotify.svg"
                                            class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New album</span> by Travis Scott
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            1 day
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <form role="form" method="post" action="{{ route('logout') }}" id="logout-form">
                        @csrf
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="nav-link nav-text font-weight-bold px-0">
                            <i class="fa-regular fa-user fa-xl me-2" style="color: #74C0FC;"></i>
                            <span class="d-sm-inline d-none">Log out</span>
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
