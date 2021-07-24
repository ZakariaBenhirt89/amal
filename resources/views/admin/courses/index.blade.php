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
                                <h1 class="mb-1 h2 fw-bold">Data Tables</h1>
                                <!-- Breadcrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="admin-dashboard.html">Dashboard</a>
                                        </li>

                                        <li class="breadcrumb-item active" aria-current="page">
                                            Data Tables
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
                                    <h4 class="mb-1">Data Table Basic</h4>
                                    <p class="mb-0">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table.</p>
                                </div>
                                <!-- table  -->
                                <div class="card-body pt-2">
                                    <table id="dataTableBasic" class="table" style="width:100%">
                                        <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="border-0 text-uppercase">
                                                Courses
                                            </th>
                                            <th scope="col" class="border-0 text-uppercase">
                                                Chef
                                            </th>
                                            <th>Office</th>
                                            <th>Age</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="border-top-0">
                                                <a href="#" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-gatsby.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ms-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                Revolutionize how you build the web...
                                                            </h4>
                                                            <span class="text-inherit">Added on 7 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/avatar/avatar-7.jpg') }}" alt="" class="rounded-circle avatar-xs me-2" />
                                                    <h5 class="mb-0">Reva Yokk</h5>
                                                </div>
                                            </td>
                                            <td>Edinburgh</td>
                                            <td>61</td>

                                        </tr>
                                        <tr>
                                            <td class="border-top-0">
                                                <a href="#" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-gatsby.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ms-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                Revolutionize how you build the web...
                                                            </h4>
                                                            <span class="text-inherit">Added on 7 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/avatar/avatar-7.jpg') }}" alt="" class="rounded-circle avatar-xs me-2" />
                                                    <h5 class="mb-0">Reva Yokk</h5>
                                                </div>
                                            </td>
                                            <td>Edinburgh</td>
                                            <td>61</td>

                                        </tr>
                                        <tr>
                                            <td class="border-top-0">
                                                <a href="#" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-gatsby.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ms-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                Revolutionize how you build the web...
                                                            </h4>
                                                            <span class="text-inherit">Added on 7 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/avatar/avatar-7.jpg') }}" alt="" class="rounded-circle avatar-xs me-2" />
                                                    <h5 class="mb-0">Reva Yokk</h5>
                                                </div>
                                            </td>
                                            <td>Edinburgh</td>
                                            <td>61</td>

                                        </tr>


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
