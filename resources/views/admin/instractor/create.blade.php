
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
                                    <img style="height: 45px;margin-right: 5px;" src="{{ asset('assets/images/cooking.svg') }}">Add chef
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
                                <h3 class="mb-0">chef Details</h3>

                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="d-lg-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center mb-4 mb-lg-0">
                                        <img src="{{ asset('assets/images/avatar/avatar-3.jpg') }}" id="img-uploaded" class="avatar-xl rounded-circle" alt="">
                                        <div class="ms-3">
                                            <h4 class="mb-0">Your avatar</h4>
                                            <p class="mb-0">
                                                PNG or JPG no bigger than 800px wide and tall.
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-outline-white btn-sm">Update</a>
                                        <a href="#" class="btn btn-outline-danger btn-sm">Delete</a>
                                    </div>
                                </div>
                                <hr class="my-5">
                                <div>
                                    <h4 class="mb-0">Personal Details</h4>
                                    <p class="mb-4">
                                        Edit your personal information and address.
                                    </p>
                                    <!-- Form -->
                                    <form class="row">
                                        <!-- First name -->
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="fname">First Name</label>
                                            <input type="text" id="fname" class="form-control form-control-sm" placeholder="First Name" required="">
                                        </div>
                                        <!-- Last name -->
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="lname">Last Name</label>
                                            <input type="text" id="lname" class="form-control form-control-sm" placeholder="Last Name" required="">
                                        </div>
                                        <!-- Phone -->
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="phone">Phone Number</label>
                                            <input type="text" id="phone" class="form-control form-control-sm" placeholder="Phone" required="">
                                        </div>
                                        <!-- Birthday -->
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">Birthday</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="Birth of Date" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label">Gender</label>
                                            <select class="selectpicker" data-width="100%">
                                                <option value="">Select Gender</option>
                                                <option value="1">Female</option>
                                                <option value="2">Male</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">Email</label>
                                            <input class="form-control form-control-sm" type="email" placeholder="email" id="birth" name="birth" />
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label">Select Center</label>
                                            <select class="selectpicker" data-width="100%">
                                                <option value="">Select Center</option>
                                                <option value="1">Center Gueliz</option>
                                                <option value="2">Center Targa</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-12 col-md-12">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control form-control-sm" placeholder="Address"></textarea>
                                        </div>



                                        <!-- State -->

                                        <!-- Country -->
                                        <div class="mb-3 col-12 col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Note</label>
                                                <div style="height: 99px !important;" id="editor">

                                                </div>

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



    </div>
    </div>

@endsection()

@section('script')

@endsection
