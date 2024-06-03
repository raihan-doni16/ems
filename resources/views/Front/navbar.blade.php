<nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
    <img src="{{ asset('img/logo-UT.png') }}" class="navbar-brand-img logo-size" alt="main_logo">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link font-weight-bold me-3" href="{{route('front-home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle font-weight-bold me-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Feature
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('front-ppa')}}">PPA</a>
                    <a class="dropdown-item" href="{{route('front-plb3')}}">PLB3</a>
                    <a class="dropdown-item" href="{{route('front-legal')}}">Legal Compliance</a>
                    {{-- <a class="dropdown-item" href="{{route('legal')}}">Legal Compliance</a> --}}
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-bold" href="#about">About</a>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="btn btn-warning" href="{{route('login')}}">Sign In</a>
        </li>
    </ul>
</nav>
