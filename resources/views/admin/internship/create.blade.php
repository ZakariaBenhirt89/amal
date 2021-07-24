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
                        <!-- Page Header -->
                        <div class="border-bottom pb-4 mb-4 d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h1 class="mb-1 h2 fw-bold">
                                    <img style="height: 45px;margin-right: 5px;" src="{{ asset('assets/images/handshake.svg') }}">Add InternShip
                                    <span class="fs-5 text-muted">(3)</span>
                                </h1>
                                <!-- Breadcrumb  -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href=".#">Dashboard</a>
                                        </li>

                                        <li class="breadcrumb-item active" aria-current="page">
                                            chefs
                                        </li>
                                    </ol>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header">
                                <h3 class="mb-0">InternShip Details</h3>

                            </div>
                            <!-- Card body -->
                            <div class="card-body">

                                <div>

                                    <!-- Form -->
                                    <form class="row">
                                        <!-- First name -->
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="fname">Title</label>
                                            <input type="text" id="fname" class="form-control form-control-sm" placeholder="Title" required="">
                                        </div>
                                        <!-- Last name -->
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="lname">Location</label>
                                            <input type="text" id="lname" class="form-control form-control-sm" placeholder="Provided By" required="">
                                        </div>
                                        <!-- Phone -->

                                        <!-- Birthday -->
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">Start Internship</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="Start Internship" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">End Internship</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="End Internship" id="birth" name="birth" readonly="readonly">
                                        </div>







                                        <!-- State -->

                                        <!-- Country -->
                                        <div class="mb-3 col-12 col-md-12">
                                            <label class="form-label" for="lname">Supervisor</label>
                                            <input type="text" id="lname" class="form-control form-control-sm" placeholder="Supervisor" required="">
                                        </div>
                                        <div class="mb-3 col-12 col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Objectifs</label>
                                                <div style="height: 99px !important;" id="editor">

                                                </div>

                                            </div>
                                        </div>

                                        <div class="mb-3 col-12 col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">GuidLine</label>
                                                <textarea class="form-control form-control-sm" cols="10"></textarea>

                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <!-- Button -->
                                            <button class="btn btn-primary" type="submit">
                                                Add Chef
                                            </button>
                                        </div>
                                    </form>
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
