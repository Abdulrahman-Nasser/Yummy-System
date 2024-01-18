@extends('admin.layouts.admin')
@section('title', 'Yummy | Admin - All Categories')
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
                                <li class="breadcrumb-item"><a href="#">Products</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Products</li>
                            </ol>
                        </nav>


                        <div class="delete_all_categories">

                            <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                                aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 text-danger" id="exampleModalToggleLabel">Delete
                                                Categories</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-light text-center">
                                            <form action="{{ route('admin.deleteAllProducts') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for=""> Delete Products using Category ID </label>
                                                    <select name="category" class="form-control" style="width: 100%;"
                                                        required>
                                                        @foreach ($category as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                        @endforeach
                                                        <!-- Add your options here -->
                                                    </select>
                                                </div>
                                                <div class="modal-footer text-center m-auto">
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bi bi-x"></i> Close
                                                        </button>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="bi bi-trash"></i> Delete
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if (count($products))
                                <div class="actions d-flex justify-content-end py-3">
                                    <button class="btn btn-danger m-1 p-2" data-bs-target="#exampleModalToggle"
                                        data-bs-toggle="modal"><i class="bi bi-trash"></i> Delete
                                        Products</button>
                                    <button class="btn btn-success m-1"><i class="bi bi-printer"></i>
                                        Print</button>

                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">List of Products</h4>

                                    <div class="table-responsive">
                                        <table class="table table-dark table-hover text-center">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Name </th>
                                                    <th> Price </th>
                                                    <th> Image </th>
                                                    <th> Menu Type </th>
                                                    <th> Category </th>
                                                    <th> Category ID </th>
                                                    <th>Registeration Date</th>
                                                    <th colspan="2">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                @forelse ($products as $data)
                                                    <tr>
                                                        <td> {{ $data->id }} </td>
                                                        <td> {{ $data->name }} </td>
                                                        <td> {{ $data->price }} L.E </td>
                                                        <td>
                                                            <img src="/uploads/products/img/{{ $data->image }}"
                                                                style="width: 50px; height: 50px;" alt="">
                                                        </td>
                                                        <td> {{ $data->filter }} </td>
                                                        <td> {{ $data->filter }} </td>

                                                        <td> {{ $data->category_id }} </td>
                                                        <td> {{ $data->created_at }} </td>
                                                        <td>
                                                            <div class="icons">
                                                                <div class="d-flex justify-content-center">
                                                                    <a href="{{ route('admin.getEditProduct', $data->id) }}" class="btn btn-warning text-center mx-2">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </a>

                                                                    {{-- Delete product --}}
                                                                    <div class="delete-product">
                                                                        <div class="modal fade" id="deleteProducts-{{ $data->id }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                                                            <div class="modal-dialog modal-dialog-centered">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h1 class="modal-title fs-5 text-danger" id="exampleModalToggleLabel">
                                                                                            Delete Product - {{ $data->name }}</h1>
                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body text-light text-center">
                                                                                        Are you sure you want to delete Product - {{ $data->name }}?
                                                                                    </div>
                                                                                    <div class="modal-footer text-center m-auto">
                                                                                        <a href="{{ route('admin.deleteProduct', $data->id) }}" class="btn btn-danger text-center">
                                                                                            <i class="bi bi-trash"></i> Delete
                                                                                        </a>
                                                                                        <div class="form-group mt-0">
                                                                                            <button type="button" class="btn btn-primary mt-3" data-bs-dismiss="modal">
                                                                                                <i class="bi bi-x"></i> Close
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <button class="btn btn-danger" data-bs-target="#deleteProducts-{{ $data->id }}" data-bs-toggle="modal">
                                                                            <i class="bi bi-trash"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>



                                                    </tr>
                                                @empty
                                                    <div
                                                        class="alert alert-danger bg-danger border-0 text-light text-center">
                                                        <span>No Products Founded </span>
                                                    </div>
                                                @endforelse


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- content-wrapper ends -->


                <!-- footer -->
                @include('admin.footer.footer')
                <!-- Footer ends -->


            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection
