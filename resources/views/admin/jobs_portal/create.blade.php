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
                                    <img style="height: 45px;margin-right: 6px;" src="http://localhost:8000/assets/images/suitcase.svg">Add Job Portal
                                    <span class="fs-5 text-muted">(3)</span>
                                </h1>
                                <!-- Breadcrumb  -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href=".#">Dashboard</a>
                                        </li>

                                        <li class="breadcrumb-item active" aria-current="page">
                                            Jobs Portal
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
                                <h3 class="mb-0">Jobs Portals Details</h3>

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
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label">Student Name</label>
                                            <select class="selectpicker" data-width="100%">
                                                <option value="">Select Student Name</option>
                                                <option value="1">student1</option>
                                                <option value="2">student2</option>
                                                <option value="2">student3</option>
                                            </select>
                                        </div>
                                        <!-- Last name -->
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="lname">Location</label>
                                            <input type="text" id="lname" class="form-control form-control-sm" placeholder="Provided By" required="">
                                        </div>
                                        <!-- Phone -->
                                        <!-- State -->
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label">Contrat Type</label>
                                            <select class="selectpicker" data-width="100%">
                                                <option value="">Contrat Type</option>
                                                <option value="1">CDI</option>
                                                <option value="2">CDD</option>
                                            </select>
                                        </div>

                                        <!-- Country -->

                                        <div class="mb-3 col-12 col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Information</label>
                                                <div style="height: 99px !important;" id="editor">

                                                </div>

                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <!-- Button -->
                                            <button class="btn btn-primary" type="submit">
                                                Add Job Portal
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
