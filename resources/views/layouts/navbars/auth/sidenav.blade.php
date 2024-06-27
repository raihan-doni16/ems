<div class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 fixed-start" id="sidenav-main">
    <div class="sidenav-header">

        <a class="navbar-brand" href="{{ route('home') }}" target="_blank">
            <img src="{{ asset('img/logo-UT.png') }}" class="navbar-brand-img" alt="main_logo">
        </a>
    </div>
    {{-- <hr class="horizontal dark mt-0"> --}}
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'ppa' ? 'active' : '' }}" href="{{ route('ppa') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">PPA</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'ppu' ? 'active' : '' }}" href="{{ route('ppu') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bullet-list-67 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">PPU</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() == 'plb3' ? 'active' : '' }}" href="{{ route('plb3') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">PLB3</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'plnb3' ? 'active' : '' }}" href="{{ route('plnb3') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">PLNB3</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() == 'legal-compliance' ? 'active' : '' }}" href="{{ route('legal-compliance') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Legal Compliance</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() == 'eduro' ? 'active' : '' }}" href="{{ route('eduro') }}">
                    <div class="icon icon-sm border-radius-md text-center text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-book text-black"></i>
                    </div>
                    <span class="nav-link-text ms-1">Eduro</span>
                   
                </a>
            </li>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'utcm-directory' ? 'active' : '' }}" href="{{ route('utcm-directory') }}">
                <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="bi bi-folder"></i>
                </div>
                <span class="nav-link-text ms-1">UTCM Directory</span>
            </a>
        </li>

        </ul>
    </div>
</div>
