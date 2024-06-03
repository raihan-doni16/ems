<div class="sidenav bg-color navbar navbar-vertical navbar-expand-xs border-0 fixed-start" id="sidenav-main">
    <div class="sidenav-header">

        <a class="navbar-brand" href="{{ route('dashboard') }}" target="_blank">
            <img src="{{ asset('img/logo-UT.png') }}" class="navbar-brand-img" alt="main_logo">
        </a>
    </div>
    {{-- <hr class="horizontal dark mt-0"> --}}
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}"style="backgound-color:">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-house fa-2xl" style="color: #051f4d;"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'licence-report' ? 'active' : '' }}" href="{{ route('licence-report') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                       <i class="fa-solid fa-bars-staggered fa-2xl" style="color: #0a3e66;"></i>
                    </div>
                    <span class="nav-link-text ms-1">Licence Report</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'repository' ? 'active' : '' }}" href="{{ route('repository') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-regular fa-file fa-xl" style="color: #041634;"></i>
                    </div>
                    <span class="nav-link-text ms-1">Repository</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'acc-report' ? 'active' : '' }}" href="{{ route('acc-report') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-regular fa-comment-dots" style="color: #051838;"></i>
                    </div>
                    <span class="nav-link-text ms-1">Approve Report</span>
                </a>
            </li>

        </ul>
    </div>
</div>
