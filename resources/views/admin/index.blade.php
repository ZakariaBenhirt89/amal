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
                        <div class="border-bottom pb-4 mb-4 d-md-flex justify-content-between align-items-center">
                            <div class="mb-3 mb-md-0">
                                <h1 class="mb-0 h2 fw-bold">Admin Dashboard</h1>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                    <div>
                                        <span style="font-size: 16px !important;" class="fs-6 text-uppercase fw-semi-bold">Students</span>
                                    </div>
                                    <div>

                                        <img height="40px" src="{{ asset('assets/images/student_list.svg') }}" />
                                    </div>
                                </div>
                                <h2 class="fw-bold mb-1">
                                   9
                                </h2>
                                <span class="text-success fw-semi-bold"><i class="fe fe-trending-up me-1"></i>+20.9$</span>
                                <span class="ms-1 fw-medium">Number of sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                    <div>
                                        <span style="font-size: 16px !important;" class="fs-6 text-uppercase fw-semi-bold">Chefs</span>
                                    </div>
                                    <div>

                                        <img height="40px" src="{{ asset('assets/images/cooking.svg') }}" />
                                    </div>
                                </div>
                                <h2 class="fw-bold mb-1">
                                   6
                                </h2>
                                <span class="text-danger fw-semi-bold">120+</span>
                                <span class="ms-1 fw-medium">Number of pending</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                    <div>
                                        <span style="font-size: 16px !important;" class="fs-6 text-uppercase fw-semi-bold">Courses</span>
                                    </div>
                                    <div>
                                        <img height="40px" src="{{ asset('assets/images/course_dashboard.svg') }}" />                                    </div>
                                </div>
                                <h2 class="fw-bold mb-1">
                                    1,22,456
                                </h2>
                                <span class="text-success fw-semi-bold"><i class="fe fe-trending-up me-1"></i>+1200</span>
                                <span class="ms-1 fw-medium">Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                    <div>
                                        <span style="font-size: 16px !important;" class="fs-6 text-uppercase fw-semi-bold">Pre-Registrad</span>
                                    </div>
                                    <div>
                                        <img height="40px" src="{{ asset('assets/images/online-voting.svg') }}" />
                                    </div>
                                </div>
                                <h2 class="fw-bold mb-1">
                                    55
                                </h2>
                                <span class="text-success fw-semi-bold"><i class="fe fe-trending-up me-1"></i>+200</span>
                                <span class="ms-1 fw-medium">Instructor</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-12 mb-5">
                        <div class="card">
                            <!-- card header  -->
                            <div class="card-header">
                                <h4 class="mb-1">Last Pre-registration</h4>
                            </div>
                            <!-- table  -->
                            <div class="table-responsive">
                                <table class="table table-hover text-nowrap mb-0">
                                    <thead>
                                    <tr>
                                        <th>Project name</th>
                                        <th>Due Date</th>
                                        <th>priority</th>
                                        <th>Members</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="align-middle"><div class="d-flex
                                          align-items-center">
                                                <div>
                                                    <div class="">
                                                        <img src="../../assets/images/brand/dropbox-logo.svg" alt="">
                                                    </div>
                                                </div>
                                                <div class="ms-3 lh-1">
                                                    <h5 class="mb-1"> <a href="#" class="text-inherit">Dropbox Design
                                                            System</a></h5>

                                                </div>
                                            </div></td>
                                        <td class="align-middle">June 2</td>
                                        <td class="align-middle"><span class="badge
                                          bg-warning">Medium</span></td>
                                        <td class="align-middle"><div class="avatar-group">
                                          <span class="avatar avatar-sm">
                                            <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle">
                                          </span>
                                                <span class="avatar avatar-sm">
                                            <img alt="avatar" src="../../assets/images/avatar/avatar-2.jpg" class="rounded-circle">
                                          </span>
                                                <span class="avatar avatar-sm">
                                            <img alt="avatar" src="../../assets/images/avatar/avatar-3.jpg" class="rounded-circle">
                                          </span>
                                                <span class="avatar avatar-sm avatar-primary">
                                            <span class="avatar-initials rounded-circle
                                              fs-6">+5</span>
                                          </span>
                                            </div></td>
                                        <td class="align-middle">
                                            <div class="dropdown ">
                                                <a class="text-muted text-primary-hover" href="#"
                                                   role="button" id="dropdownThirtyOne"
                                                   data-bs-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <i class="fe fe-more-vertical" ></i>
                                                </a>
                                                <div class="dropdown-menu"
                                                     aria-labelledby="dropdownThirtyOne">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else
                                                        here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle"><div class="d-flex
                                          align-items-center">
                                                <div>
                                                    <div class="">
                                                        <img src="../../assets/images/brand/slack-logo.svg" alt="">
                                                    </div>
                                                </div>
                                                <div class="ms-3 lh-1">
                                                    <h5 class="mb-1"> <a href="#" class="text-inherit">Slack  UI Design</a></h5>
                                                </div>
                                            </div></td>
                                        <td class="align-middle">June 12</td>
                                        <td class="align-middle"><span class="badge
                                          bg-danger">High</span></td>
                                        <td class="align-middle"><div class="avatar-group">
                                          <span class="avatar avatar-sm">
                                            <img alt="avatar" src="../../assets/images/avatar/avatar-4.jpg" class="rounded-circle">
                                          </span>
                                                <span class="avatar avatar-sm">
                                            <img alt="avatar" src="../../assets/images/avatar/avatar-5.jpg" class="rounded-circle">
                                          </span>
                                                <span class="avatar avatar-sm">
                                            <img alt="avatar" src="../../assets/images/avatar/avatar-6.jpg" class="rounded-circle">
                                          </span>
                                                <span class="avatar avatar-sm avatar-primary">
                                            <span class="avatar-initials rounded-circle
                                              fs-6">+5</span>
                                          </span>
                                            </div></td>
                                        <td class="align-middle">
                                            <div class="dropdown ">
                                                <a class="text-muted text-primary-hover" href="#"
                                                   role="button" id="dropdownThirtyTwo"
                                                   data-bs-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <i class="fe fe-more-vertical" ></i>
                                                </a>
                                                <div class="dropdown-menu"
                                                     aria-labelledby="dropdownThirtyTwo">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else
                                                        here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle"><div class="d-flex
                                          align-items-center">
                                                <div>
                                                    <div class="">
                                                        <img src="../../assets/images/brand/github-logo.svg" alt="">
                                                    </div>
                                                </div>
                                                <div class="ms-3 lh-1">
                                                    <h5 class="mb-1"> <a href="#" class="text-inherit">GitHub Satellite</a></h5>
                                                </div>
                                            </div></td>
                                        <td class="align-middle">Aug 14</td>
                                        <td class="align-middle"><span class="badge bg-info">Low</span></td>
                                        <td class="align-middle"><div class="avatar-group">
                                          <span class="avatar avatar-sm">
                                            <img alt="avatar" src="../../assets/images/avatar/avatar-7.jpg" class="rounded-circle">
                                          </span>
                                                <span class="avatar avatar-sm">
                                            <img alt="avatar" src="../../assets/images/avatar/avatar-8.jpg" class="rounded-circle">
                                          </span>
                                                <span class="avatar avatar-sm">
                                            <img alt="avatar" src="../../assets/images/avatar/avatar-9.jpg" class="rounded-circle">
                                          </span>
                                                <span class="avatar avatar-sm avatar-primary">
                                            <span class="avatar-initials rounded-circle
                                              fs-6">+1</span>
                                          </span>
                                            </div></td>
                                        <td class="align-middle">
                                            <div class="dropdown ">
                                                <a class="text-muted text-primary-hover" href="#"
                                                   role="button" id="dropdownThirtyThree"
                                                   data-bs-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <i class="fe fe-more-vertical" ></i>
                                                </a>
                                                <div class="dropdown-menu"
                                                     aria-labelledby="dropdownThirtyThree">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else
                                                        here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle border-bottom-0"><div class="d-flex
                                          align-items-center">
                                                <div>
                                                    <div class="">
                                                        <img src="../../assets/images/brand/3dsmax-logo.svg" alt="">
                                                    </div>
                                                </div>
                                                <div class="ms-3 lh-1">
                                                    <h5 class="mb-1"> <a href="#" class="text-inherit">3D Character Modelling</a></h5>
                                                </div>
                                            </div></td>
                                        <td class="align-middle border-bottom-0">Sept 20
                                        </td>
                                        <td class="align-middle border-bottom-0"><span class="badge
                                          bg-warning">Medium</span></td>
                                        <td class="align-middle border-bottom-0"><div class="avatar-group">
                                          <span class="avatar avatar-sm">
                                            <img alt="avatar" src="../../assets/images/avatar/avatar-10.jpg" class="rounded-circle">
                                          </span>
                                                <span class="avatar avatar-sm">
                                            <img alt="avatar" src="../../assets/images/avatar/avatar-11.jpg" class="rounded-circle">
                                          </span>
                                                <span class="avatar avatar-sm">
                                            <img alt="avatar" src="../../assets/images/avatar/avatar-12.jpg" class="rounded-circle">
                                          </span>
                                                <span class="avatar avatar-sm avatar-primary">
                                            <span class="avatar-initials rounded-circle
                                              fs-6">+5</span>
                                          </span>
                                            </div></td>
                                        <td class="align-middle border-bottom-0">
                                            <div class="dropdown ">
                                                <a class="text-muted text-primary-hover" href="#"
                                                   role="button" id="dropdownThirtyFour"
                                                   data-bs-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <i class="fe fe-more-vertical" ></i>
                                                </a>
                                                <div class="dropdown-menu"
                                                     aria-labelledby="dropdownThirtyFour">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else
                                                        here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>



                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>                </div>
              <!--  <div class="row">

                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="mycard bg1 mb-4">
                            <div class="left">
                                <h5 class="title">Students! </h5>
                                <span class="number">9</span>
                                <a href="#" class="link">View All</a>
                            </div>
                            <div class="right d-flex align-self-center">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="mycard bg2 mb-4">
                            <div class="left">
                                <h5 class="title">Chefs!</h5>
                                <span class="number">0</span>
                                <a href="#" class="link">View All</a>
                            </div>
                            <div class="right d-flex align-self-center">
                                <div class="icon">
                                    <i class="fas fa-chalkboard-teacher"></i>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="mycard bg3 mb-4">
                            <div class="left">
                                <h5 class="title">Cources!</h5>
                                <span class="number">2</span>
                                <a href="#" class="link">View All</a>
                            </div>
                            <div class="right d-flex align-self-center">
                                <div class="icon">
                                    <i class="fas fa-place-of-worship"></i>


                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-xl-3 col-lg-6 col-md-12 col-12">

            </div>


        </div> -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card header -->
                            <div class="card-header align-items-center card-header-height d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0">Earnings</h4>
                                </div>
                                <div>
                                    <div class="dropdown dropstart">
                                        <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="courseDropdown1">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fe fe-external-link dropdown-item-icon "></i>Export</a>
                                            <a class="dropdown-item" href="#"><i class="fe fe-mail dropdown-item-icon "></i>Email
                                                Report</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fe fe-download dropdown-item-icon "></i>Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Earning chart -->
                                <div id="earning" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-4">
                        <!-- Card -->
                        <div class="card h-100">
                            <!-- Card header -->
                            <div class="card-header d-flex align-items-center
                              justify-content-between card-header-height">
                                <h4 class="mb-0">Last Student</h4>
                                <a href="#" class="btn btn-outline-white btn-sm">View all</a>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- List group -->
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0 pt-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-offline">
                                                    <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n3">
                                                <h4 class="mb-0 h5">New Cource</h4>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">42</span>Courses</span>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">1,10,124</span>Students</span>
                                                <span class="fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">32,000</span> Reviews
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown7"
                               data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown7">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>

                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                                    <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-2.jpg') }}" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n3">
                                                <h4 class="mb-0 h5">Jose Portilla</h4>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">12</span>Courses</span>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">21,567</span>Students</span>
                                                <span class="fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">22,000
                            </span> Reviews
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown8"
                               data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown8">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>

                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-away">
                                                    <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-3.jpg') }}" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n3">
                                                <h4 class="mb-0 h5">Eleanor Pena</h4>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">32</span>Courses</span>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">11,604</span>Students</span>
                                                <span class="fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">12,230
                            </span> Reviews
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown9"
                               data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown9">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>

                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-info">
                                                    <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-6.jpg') }}" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n3">
                                                <h4 class="mb-0 h5">March Delson</h4>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">23</span>Courses</span>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">6,304</span>Students</span>
                                                <span class="fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">56,000</span> Reviews
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown10"
                               data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown10">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>

                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-busy">
                                                    <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-7.jpg') }}" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n3">
                                                <h4 class="mb-0 h5">Sina Ray</h4>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">14</span>Courses</span>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">8,000</span>Students</span>
                                                <span class="fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">33,000</span> Reviews
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown11"
                               data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown11">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-4">
                        <!-- Card -->
                        <div class="card h-100">
                            <!-- Card header -->
                            <div class="card-header d-flex align-items-center
                              justify-content-between card-header-height">
                                <h4 class="mb-0">Recent Courses</h4>
                                <a href="#" class="btn btn-outline-white btn-sm">View all</a>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- List group flush -->
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0 pt-0">
                                        <div class="row">
                                            <!-- Col -->
                                            <div class="col-auto">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/course/course-laravel.jpg') }}" alt="" class="img-fluid rounded img-4by3-lg" /></a>
                                            </div>
                                            <!-- Col -->
                                            <div class="col ps-0">
                                                <a href="#">
                                                    <h5 class="text-primary-hover">
                                                        Revolutionize how you build the web...
                                                    </h5>
                                                </a>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/avatar/avatar-7.jpg') }}" alt="" class="rounded-circle avatar-xs me-2" />
                                                    <span class="fs-6">Brooklyn Simmons</span>
                                                </div>
                                            </div>
                                            <!-- Col auto -->
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown3"
                               data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0">
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="#"><img src="{{ asset('assets/images/course/course-gatsby.jpg') }}" alt="" class="img-fluid rounded img-4by3-lg" /></a>
                                            </div>
                                            <div class="col ps-0">
                                                <a href="#">
                                                    <h5 class="text-primary-hover">
                                                        Guide to Static Sites with Gatsby.js
                                                    </h5>
                                                </a>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/avatar/avatar-8.jpg') }}" alt="" class="rounded-circle avatar-xs me-2" />
                                                    <span class="fs-6">Jenny Wilson</span>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown4"
                               data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0">
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/course/course-javascript.jpg') }}" alt="" class="img-fluid rounded img-4by3-lg" /></a>
                                            </div>
                                            <div class="col ps-0">
                                                <a href="#">
                                                    <h5 class="text-primary-hover">The Modern JavaScript Courses
                                                    </h5>
                                                </a>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" alt="" class="rounded-circle avatar-xs me-2" />
                                                    <span class="fs-6">Guy Hawkins</span>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown5"
                               data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown5">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0">
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/course/course-wordpress.jpg') }}" alt="" class="img-fluid rounded img-4by3-lg" /></a>
                                            </div>
                                            <div class="col ps-0">
                                                <a href="#">
                                                    <h5 class="text-primary-hover">
                                                        Online WordPress Courses Become an Expert Today‎
                                                    </h5>
                                                </a>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/avatar/avatar-5.jpg') }}" alt="" class="rounded-circle avatar-xs me-2" />
                                                    <span class="fs-6">Robert Fox</span>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown6"
                               data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown6">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-4">
                        <!-- Card -->
                        <div class="card h-100">
                            <!-- Card header -->
                            <div class="card-header card-header-height d-flex align-items-center">
                                <h4 class="mb-0">Activity
                                </h4>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- List group -->
                                <ul class="list-group list-group-flush list-timeline-activity">
                                    <li class="list-group-item px-0 pt-0 border-0 mb-2">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                                    <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-6.jpg') }}" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n2">
                                                <h4 class="mb-0 h5">Dianna Smiley</h4>
                                                <p class="mb-1">Just buy the courses”Build React Application Tutorial”</p>
                                                <span class="fs-6">2m ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 pt-0  border-0 mb-2">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-offline">
                                                    <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-7.jpg') }}" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n2">
                                                <h4 class="mb-0 h5">
                                                    Irene Hargrove
                                                </h4>
                                                <p class="mb-1">Comment on “Bootstrap Tutorial” Says “Hi,I m irene...</p>
                                                <span class="fs-6">1 hour ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 pt-0  border-0 mb-2">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-busy">
                                                    <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-4.jpg') }}" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n2">
                                                <h4 class="mb-0 h5">Trevor Bradle</h4>
                                                <p class="mb-1">Just share your article on Social Media..</p>
                                                <span class="fs-6">2 month ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0 pt-0 border-0">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-away">
                                                    <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n2">
                                                <h4 class="mb-0 h5">John Deo</h4>
                                                <p class="mb-1">Just buy the courses”Build React Application Tutorial”</p>
                                                <span class="fs-6">2m ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
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