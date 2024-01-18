@extends('admin.layouts.admin')
@section('title', 'Admin | Add Products')
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
                                <li class="breadcrumb-item active" aria-current="page">Add Products</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">


                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Create New Product</h4>
                                    <form class="form-sample"  action="{{ route('admin.addProduct') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Product Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="name"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            placeholder="Product Name" value="{{ old('name') }}" />
                                                    </div>

                                                    @error('name')
                                                        <span class="invalid-feedback mt-3" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Product Price</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="price"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            placeholder="Product Price" value="{{ old('price') }}" />
                                                    </div>

                                                    @error('name')
                                                        <span class="invalid-feedback mt-3" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label">Product Image</label>
                                                    <div class="col-sm-12">
                                                        <input type="file" name="image_file"
                                                            class="form-control @error('image_file') is-invalid @enderror"
                                                            placeholder="Product Price" value="{{ old('image_file') }}" />
                                                    </div>

                                                    @error('image_file')
                                                        <span class="invalid-feedback mt-3" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Select Category</label>
                                                    <div class="col-sm-12">
                                                        <select name="category_id" id=""
                                                            class="form-control @error('category_id') is-invalid @enderror ">
                                                            @foreach ($category as $data)
                                                                <option value="{{ $data->id }}">{{ $data->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    @error('category_id')
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
