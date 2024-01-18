@extends('admin.layouts.admin')
@section('title', 'Yummy | Admin - All Users')
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
                                <li class="breadcrumb-item"><a href="#">Users</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Users</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">

                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">List of Users</h4>

                                    <div class="table-responsive">
                                        <table class="table table-dark table-hover text-center">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Name </th>
                                                    <th> Email </th>
                                                    <th> Password </th>
                                                    <th>Registeration Date</th>
                                                    <th colspan="2">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                @forelse ($user as $data )
                                                <tr>
                                                    <td> {{ $data->id }} </td>
                                                    <td> {{ $data->name }} </td>
                                                    <td> {{ $data->email }} </td>
                                                    <td> {{ $data->password }} </td>
                                                    <td> {{ $data->created_at }} </td>
                                                    <td><a href="{{route('admin.getEditUser' , $data->id)}}" class="btn btn-warning text-center"><i class="bi bi-pencil"></i></a></td>
                                                    <td><a href="{{ route('admin.deleteUser' , $data->id) }}" class="btn btn-danger text-center"><i class="bi bi-trash"></i></a></td>

                                                </tr>
                                                @empty
                                                <div class="alert alert-danger bg-danger border-0 text-light text-center">
                                                    <span>No Users Founded </span>
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
