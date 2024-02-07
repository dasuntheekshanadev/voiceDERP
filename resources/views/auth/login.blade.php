@extends('layouts.app')

@section('content')
<div class="main-body container-fluid d-flex justify-content-center align-content-center">
    <div class="container  d-flex justify-content-center align-items-center flex-column position-absolute top-50 translate-middle-x translate-middle-y">
        <div class="col-md-4 col-sm-4 col-8 position-relative">
            <img src="./assets/images/logo.png" alt="logo" class="w-100 h-100" />
        </div>
        <p>Please Login to Continue</p>

        <form class="d-flex flex-column col-md-8 col-sm-10 col-10" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3 col">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="name@example.com" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 col">
                <label for="inputPassword" class="form-label">Password</label>

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            <div class="w-100 d-flex">
                <a href="" class="w-100">
                    <button type="submit" class="btn btn-primary w-100 login-btn">
                        {{ __('Login') }}
                    </button>
                </a>

            </div>


        </form>


    </div>


</div>
@endsection