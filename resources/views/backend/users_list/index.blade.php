
@extends('layout.base')
@section("custom_css")

        {{-- <link rel="stylesheet" href="{{ asset('backend/assets/css/all_users.css')}}"> --}}
@stop
        @section('content')
                <div class="content">
                    <div class="container-fluid">
                        <div class="row page-title">
                            <div class="col-md-12">
                                <h4 class="mb-1 mt-0">All Users</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        {{-- <h4 class="header-title mt-0 mb-1">Basic Data Table</h4> --}}
                                            <p class="sub-header">
                                            List of all registered users
                                                </p>
                                            <div class="table-responsive">
                                                 <table class="table mb-0" id="basic-datatable">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                     <th scope="col">Status</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark <span class="badge badge-primary float-right">owner</span></td>
                                                    <td>Activated</td>
                                                    <td><div class="btn-group mt-2 mr-1">
                                            <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions<i class="icon"><span data-feather="chevron-down"></span></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="/backend/view_user">View Profile</a>
                                                <a class="dropdown-item" href="#">Active</a>
                                                <a class="dropdown-item" href="#">Deactivate</a>
                                            </div>
                                        </div></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob <span class="badge badge-secondary float-right">assistant</span></td>
                                                    <td>Not Activated</td>
                                                    <td><div class="btn-group mt-2 mr-1">
                                            <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions<i class="icon"><span data-feather="chevron-down"></span></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="/backend/view_user">View Profile</a>
                                                <a class="dropdown-item" href="#">Active</a>
                                                <a class="dropdown-item" href="#">Deactivate</a>
                                            </div>
                                        </div></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry <span class="badge badge-secondary float-right">assistant</span></td>
                                                    <td>Activated</td>
                                                    <td><div class="btn-group mt-2 mr-1">
                                            <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions<i class="icon"><span data-feather="chevron-down"></span></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="/backend/view_user">View Profile</a>
                                                <a class="dropdown-item" href="#">Active</a>
                                                <a class="dropdown-item" href="#">Deactivate</a>
                                            </div>
                                        </div>
</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        
                    </div>
                </div>
        
        @endsection


    @section("javascript")

    @stop