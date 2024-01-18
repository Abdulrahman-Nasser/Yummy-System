@extends('layouts.login-layout')
@section('title', 'Yummy | Login')
@section('content')


    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Welcom Back to Yummy.</h3>
                        <form action="{{ route('login') }}" method="POST" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail"
                                    autofocus>

                                @error('email')
                                    <span class="invalid-feedback mt-3" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password" placeholder="Password" value="{{ old('password') }}">
                                <span title="show password" toggle="#password-field"
                                    class="bi bi-eye field-icon toggle-password" style="cursor: pointer"></span>

                                @error('password')
                                    <span class="invalid-feedback mt-3" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            {{-- <div class="form-group d-md-flex">
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password ?</a>
                                </div>
                            </div> --}}
                        </form>
                        <p class="w-100 text-center">&mdash; Or Sign Up &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="{{ route('register') }}" class="px-2 py-2 mr-md-1 rounded"><span
                                    class="ion-logo-facebook mr-2"></span>
                                Register</a>

                        </div>

                        <p class="w-100 text-center mt-2">&mdash; Or Home  &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="{{ route('user.home') }}" class="px-2 py-2 mr-md-1 rounded"><span
                                    class="ion-logo-facebook mr-2"></span>
                                Home</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
