@extends('admin.layouts.login')
@section('title', 'Admin | Sign in')

@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Login</h3>


                            {{-- @if (Session::has('error'))
                                <div class="error alert alert-danger bg-danger border-danger text-center text-light">
                                    {{ Session::get('error') }}
                                </div>
                            @endif --}}

                            <form method="POST" action="{{ route('admin.login') }}">
                                @csrf
                                <div class="form-group">
                                    <label> E-mail</label>
                                    <input type="text" class="form-control p_input @error('name') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required>

                                    @error('email')
                                        <span class="invalid-feedback mt-3" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password </label>
                                    <input type="password"
                                        class="form-control p_input @error('password') is-invalid @enderror" name="password"
                                        value="{{ old('password') }}" required>


                                    @error('password')
                                        <span class="invalid-feedback mt-3" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input"> Remember me </label>
                                    </div>
                                    <a href="#" class="forgot-pass">Forgot password</a>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary btn-block enter-btn">Login</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection
