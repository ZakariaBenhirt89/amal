@extends('admin.admin_layouts')
@section('title', 'Admin Dashboard')
@section('content')

    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
    @include('admin.includes.sidebar')
    <!-- Page Content -->
        <div id="page-content">
        @include('admin.includes.header')
        <!-- Page Header -->
            <!-- Container fluid -->
            <div class="container-fluid p-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div class="border-bottom pb-4 mb-4">
                            <div>
                                <h1 class="mb-1 h2 fw-bold"><img style="height: 45px;margin-right: 6px;" src="http://localhost:8000/assets/images/handshake.svg">Jobs  Portal</h1>
                                <!-- Breadcrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Dashboard</a>
                                        </li>

                                        <li class="breadcrumb-item active" aria-current="page">
                                            InternShips
                                        </li>
                                    </ol>
                                </nav>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="">
                    <div class="row">
                        <!-- basic table -->
                        <div class="col-md-12 col-12 mb-5">
                            <div class="card">
                                <!-- card header  -->
                                <div class="card-header border-bottom-0">
                                    <h3 class="mb-1">All  InternShips</h4>
                                </div>

                                <!-- table  -->
                                <div class="card-body pt-2">
                                    <table id="dataTableBasic" class="table" style="width:100%">
                                        <thead class="table-light">
                                        <tr>
                                            <th>SL</th>
                                            <th>Title</th>
                                            <th>Student Name</th>
                                            <th>Location</th>
                                            <th>Contrat type</th>
                                            <th>Information</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>




                                        </tbody>

                                    </table>
                                </div>
                            </div>

                        </div>





                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection()

@section('script')

@endsection
