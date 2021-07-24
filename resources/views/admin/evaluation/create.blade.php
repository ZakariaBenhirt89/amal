
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
                                    <img style="height: 45px;margin-right: 6px;" src="{{ asset('assets/images/package.svg') }}" />Add Monitoring
                                    <span class="fs-5 text-muted">(3)</span>
                                </h1>
                                <!-- Breadcrumb  -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href=".#">Dashboard</a>
                                        </li>

                                        <li class="breadcrumb-item active" aria-current="page">
                                            Monitorings
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
                        <div  style="border-top: 4px solid #18113c;" class="card">
                            <!-- Card header -->
                            <div class="card-header">
                                <h3 class="mb-0">Monitoring Details</h3>
                                <p class="mb-0">
                                    You have full control to manage your own account setting.
                                </p>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                           <!--      <div class="d-lg-flex align-items-center justify-content-between">
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
                                <hr class="my-5"> -->
                                <div>

                                    <!--    <h4 class="mb-0">Personal Details</h4>
                                    <p class="mb-4">
                                        Edit your personal information and address.
                                    </p> Form -->
                                    <form class="row">
                                        <!-- First name -->
                                        <div class="mb-3 col-12 col-md-12">
                                            <label class="form-label" for="fname">Intern's Name </label>
                                            <input type="text" id="fname" class="form-control form-control-sm" placeholder="Intern's Name" required="">
                                        </div>
                                        <!-- Last name -->

                                        <!-- Phone -->
                                        <h6 style="background: #18113c;color: #FFF;" class="mb-2 display-4 text-center">Garde Manger</h6>

                                        <div class="mb-3 col-12 col-md-12">
                                            <label class="form-label" for="fname">Note </label>
                                            <input type="text" id="fname" class="form-control form-control-sm" placeholder="Note " required="">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">Start of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="Start of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">End of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="End of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <h6 style="background: #18113c;color: #FFF;" class="mb-2 display-4  text-center">Service et Passe</h6>
                                        <div class="mb-3 col-12 col-md-12">
                                            <label class="form-label" for="fname">Note </label>
                                            <input type="text" id="fname" class="form-control form-control-sm" placeholder="Note " required="">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">Start of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="Start of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">End of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="End of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <h6 style="background: #18113c;color: #FFF;" class="mb-2 display-4  text-center">Cuisine Internationale</h6>
                                        <div class="mb-3 col-12 col-md-12">
                                            <label class="form-label" for="fname">Note </label>
                                            <input type="text" id="fname" class="form-control form-control-sm" placeholder="Note " required="">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">Start of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="Start of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">End of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="End of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <h6 style="background: #18113c;color: #FFF;" class="mb-2 display-4  text-center">Cuisine Marocaine</h6>
                                        <div class="mb-3 col-12 col-md-12">
                                            <label class="form-label" for="fname">Note </label>
                                            <input type="text" id="fname" class="form-control form-control-sm" placeholder="Note " required="">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">Start of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="Start of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">End of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="End of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <h6 style="background: #18113c;color: #FFF;" class="mb-2 display-4  text-center">Plonge</h6>
                                        <div class="mb-3 col-12 col-md-12">
                                            <label class="form-label" for="fname">Note </label>
                                            <input type="text" id="fname" class="form-control form-control-sm" placeholder="Note " required="">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">Start of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="Start of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">End of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="End of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <h6 style="background: #18113c;color: #FFF;" class="mb-2 display-4  text-center">Economat-Café</h6>
                                        <div class="mb-3 col-12 col-md-12">
                                            <label class="form-label" for="fname">Note </label>
                                            <input type="text" id="fname" class="form-control form-control-sm" placeholder="Note " required="">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">Start of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="Start of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">End of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="End of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <h6 style="background: #18113c;color: #FFF;" class="mb-2 display-4  text-center">Boulangerie</h6>
                                        <div class="mb-3 col-12 col-md-12">
                                            <label class="form-label" for="fname">Note </label>
                                            <input type="text" id="fname" class="form-control form-control-sm" placeholder="Note " required="">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">Start of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="Start of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">End of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="End of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <h6 style="background: #18113c;color: #FFF;" class="mb-2 display-4  text-center">Pâtisserie M.</h6>
                                        <div class="mb-3 col-12 col-md-12">
                                            <label class="form-label" for="fname">Note </label>
                                            <input type="text" id="fname" class="form-control form-control-sm" placeholder="Note " required="">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">Start of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="Start of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">End of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="End of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <h6 style="background: #18113c;color: #FFF;" class="mb-2 display-4  text-center">Passe</h6>
                                        <div class="mb-3 col-12 col-md-12">
                                            <label class="form-label" for="fname">Note </label>
                                            <input type="text" id="fname" class="form-control form-control-sm" placeholder="Note " required="">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">Start of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="Start of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">End of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="End of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <h6 style="background: #18113c;color: #FFF;" class="mb-2 display-4 text-center">Pâtisserie Internationale</h6>
                                        <div class="mb-3 col-12 col-md-12">
                                            <label class="form-label" for="fname">Note </label>
                                            <input type="text" id="fname" class="form-control form-control-sm" placeholder="Note " required="">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">Start of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="Start of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label class="form-label" for="birth">End of rotation</label>
                                            <input class="form-control form-control-sm flatpickr flatpickr-input" type="text" placeholder="End of rotation" id="birth" name="birth" readonly="readonly">
                                        </div>




                                        <!-- State -->



                                        <div class="col-12">
                                            <!-- Button -->
                                            <button class="btn btn-primary" type="submit">
                                                Add Monitoring
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
