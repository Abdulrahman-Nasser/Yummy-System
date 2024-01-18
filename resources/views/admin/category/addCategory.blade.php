@extends('admin.layouts.admin')
@section('title', 'Admin | Add Category')
@section('content')

    <div class="container-scroller">
        {{-- sidebar --}}
        @include('admin.asside.asside')
        {{-- end sidebar --}}

        <div class="container-fluid page-body-wrapper">

            {{-- header --}}
            @include('admin.header.header')
            {{-- end header --}}

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">


                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Create New Category</h4>
                                    <form class="form-sample" action="{{ route('admin.addCategory') }}" method="POST">
                                        @csrf
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Category Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="name"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            placeholder="Category Name" value="{{old('name')}}" />
                                                    </div>

                                                    @error('name')
                                                        <span class="invalid-feedback mt-3" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                            </div>



                                            <div class="col-md-12 m-auto">
                                                <div class="d-grid ">
                                                    <button class="btn btn-primary w-100 p-3">Add </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- content-wrapper ends -->

                {{-- footer --}}
                @include('admin.footer.footer')
                {{-- end footer --}}

            </div>
            <!-- main-panel ends -->
        </div>
    </div>
@endsection
