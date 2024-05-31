@extends('layouts.app')

@section('content')
    <div class="container position-sticky z-index-sticky top-0">

    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Sign Up
                                    </h4>
                                    <p class="mb-0">Enter your email and password to sign Up</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register.perform') }}">
                                        @csrf
                                        <div class="flex flex-col mb-3">
                                            <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Name" value="{{ old('username') }}" >
                                            @error('username') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" value="{{ old('email') }}" >
                                            @error('email') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password">
                                            @error('password') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                        </div>
                                        <div class="form-check form-check-info text-start">
                                            <input class="form-check-input" type="checkbox" name="terms" id="flexCheckDefault" >
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and
                                                    Conditions</a>
                                            </label>
                                            @error('terms') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn color-bg w-100 my-4 mb-2">Sign up</button>
                                        </div>
                                        <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{ route('login') }}"
                                                class="text-dark font-weight-bolder">Sign in</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">

                                <img src="img/login-imgg.jpg" alt="login" class="login-img">
                                <h4 class="login-right">Environment Management System</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
