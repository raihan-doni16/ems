@extends('layouts.app')

@section('content')
        <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto " style="margin-top: 110px">
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
                                            <button type="submit" class="btn btn-lg color-bg btn-lg w-100 mt-4 mb-0">Sign up</button>
                                            <a href="{{route('google.login')}}" class="btn btn-lg btn-lg w-80 mt-4 mb-0">
                                                <i class="fa-brands fa-google"></i> Sign Up With Google
                                            </a>
                                        </div>
                                        <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{ route('login') }}"
                                                class="text-success font-weight-bolder">Sign in</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column" style="padding-top: -20px;">
                            <img src="img/login-img.png" alt="login" class="login-img img-move" style="margin-bottom: -10px;">
                            <h4 class="login-right" style="margin-top: -10px;">Environment Management System</h4>
                        </div>
                    </div>
                </div>
        </section>
@endsection
