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
                                <li class="breadcrumb-item"><a href="#">Categories</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Categories</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">

                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">List of Categories</h4>

                                    @if (session('redirectDelay'))
                                        <p id="countdown" class="text-center bg-warning m-2 p-2 text-light">Redirecting in
                                            {{ session('redirectDelay') }} seconds...</p>
                                    @endif

                                    <div class="delete_all_categories">

                                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                                            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5 text-danger"
                                                            id="exampleModalToggleLabel">
                                                            Delele Categories</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-light text-center">
                                                        are you sure to delete all categories ?
                                                    </div>
                                                    <div class="modal-footer text-center m-auto">
                                                        <form action="{{ route('admin.deleteAllCategories') }}"
                                                            method="GET">
                                                            <div class="form-group mt-1">
                                                                <button class="btn btn-danger"> <i class="bi bi-trash"></i>
                                                                    Delete</button>
                                                            </div>
                                                        </form>

                                                        <div class="form-group">
                                                            <button class="btn btn-primary" data-bs-dismiss="modal"><i
                                                                    class="bi bi-x"></i> close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @if (count($category))
                                            <div class="actions d-flex justify-content-end py-3">
                                                <button class="btn btn-danger m-1" data-bs-target="#exampleModalToggle"
                                                    data-bs-toggle="modal">Delete All
                                                    Categories</button>
                                                <button class="btn btn-success m-1"><i class="bi bi-printer"></i>
                                                    Print</button>

                                            </div>
                                        @endif
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-dark table-hover text-center">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Name </th>
                                                    <th>Registeration Date</th>
                                                    <th colspan="2">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                @forelse ($category as $data)
                                                    <tr>
                                                        <td> {{ $data->id }} </td>
                                                        <td> {{ $data->name }} </td>
                                                        <td> {{ $data->created_at }} </td>
                                                        <td>
                                                            <div class="icons">
                                                                <div class="d-flex justify-content-center">

                                                                    {{-- edit category --}}
                                                                    <a href="{{ route('admin.getEditCategory', $data->id) }}"
                                                                        class="btn btn-warning text-center mx-2"><i
                                                                            class="bi bi-pencil"></i></a>

                                                                    {{-- delete category --}}
                                                                    <div class="delete-category">

                                                                        <div class="modal fade" id="deleteCategory"
                                                                            aria-hidden="true"
                                                                            aria-labelledby="exampleModalToggleLabel"
                                                                            tabindex="-1">
                                                                            <div class="modal-dialog modal-dialog-centered">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h1 class="modal-title fs-5 text-danger"
                                                                                            id="exampleModalToggleLabel">
                                                                                            Delele Category -
                                                                                            {{ $data->name }}</h1>
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="modal-body text-light text-center">
                                                                                        are you sure to delete all
                                                                                        categories ?
                                                                                    </div>
                                                                                    <div
                                                                                        class="modal-footer text-center m-auto">
                                                                                        <a href="{{ route('admin.DeleteCategory', $data->id) }}"
                                                                                            class="btn btn-danger text-center"><i
                                                                                                class="bi bi-trash"></i>
                                                                                            Delete</a>

                                                                                        <div class="form-group">
                                                                                            <button class="btn btn-primary"
                                                                                                data-bs-dismiss="modal"><i
                                                                                                    class="bi bi-x"></i>
                                                                                                close</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <button class="btn btn-danger"
                                                                            data-bs-target="#deleteCategory"
                                                                            data-bs-toggle="modal"><i
                                                                                class="bi bi-trash"></i></button>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <div
                                                        class="alert alert-danger bg-danger border-0 text-light text-center">
                                                        <span>No Categories Founded </span>
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

    <script>
        // Redirect countdown
        @if (session('redirectDelay'))
            const countdownElement = document.getElementById('countdown');
            let redirectDelay = {{ session('redirectDelay') }};
            let countdown = setInterval(() => {
                countdownElement.textContent = `Redirecting in ${redirectDelay} seconds...`;
                redirectDelay--;
                if (redirectDelay < 0) {
                    clearInterval(countdown);
                    location.href = "{{ route('admin.allProducts') }}";
                }
            }, 1000);
        @endif
    </script>
@endsection
