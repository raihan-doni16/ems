@extends('layouts.app')

@section('content')

        <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto" style="margin-top: 240px">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Change password</h4>
                                    <p class="mb-0">Set a new password for your email</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('change.perform') }}">
                                        @csrf

                                        <div class="flex flex-col mb-3">
                                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" value="{{ old('email') }}" aria-label="Email">
                                            @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" >
                                            @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="password" name="confirm-password" class="form-control form-control-lg" placeholder="Password" aria-label="Password"  >
                                            @error('confirm-password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg color-bg btn-lg w-100 mt-4 mb-0">Send Reset Link</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="alert">
                                    @include('components.alert')
                                </div>
                            </div>
                        </div>
                        <div
                        class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">

                            <img src="img/login-img.png" alt="login" class="login-img img-move ms-5">
                            <h4 class="login-right">Environment Management System</h4>
                        </div>

                    </div>
                    </div>
                </div>
        </section>
@endsection
