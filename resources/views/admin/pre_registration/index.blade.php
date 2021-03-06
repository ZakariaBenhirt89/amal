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
                                    <img style="height: 45px;margin-right: 6px;" src="{{ asset('assets/images/online-voting.svg') }}" /> Pre-Registration
                                    <span class="fs-5 text-muted">(3)</span>
                                </h1>
                                <!-- Breadcrumb  -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href=".#">Dashboard</a>
                                        </li>

                                        <li class="breadcrumb-item active" aria-current="page">
                                            Pre-registration
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="nav btn-group" role="tablist">
                                <button class="btn btn-outline-white active" data-bs-toggle="tab" data-bs-target="#tabPaneGrid" role="tab" aria-controls="tabPaneGrid" aria-selected="true">
                                    <span class="fe fe-grid"></span>
                                </button>
                                <button class="btn btn-outline-white" data-bs-toggle="tab" data-bs-target="#tabPaneList" role="tab" aria-controls="tabPaneList" aria-selected="false">
                                    <span class="fe fe-list"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Tab -->
                        <div class="tab-content">
                            <!-- Tab Pane -->
                            <div class="tab-pane fade show active" id="tabPaneGrid" role="tabpanel" aria-labelledby="tabPaneGrid">
                                <div class="mb-4">
                                    <forms>
                                        <input id="search" type="search" class="form-control" name="search_student" placeholder="Search Students" />
                                    </forms>
                                </div>
                                <div class="row">

                                @isset($pre_registrations)

                                        @foreach($pre_registrations as $pre_registration)
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                                <!-- Card -->
                                                <div class="card mb-4">
                                                    <!-- Card Body -->
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <div class="position-relative d-flex justify-content-center">
                                                                <img src="{{ asset('assets/student/'.$pre_registration->avatar.'') }}" class="rounded-circle avatar-xl mb-3" alt="" />
                                                                <a href="#" class="position-absolute mt-10 ms-n5">
                                                                    <span class="status bg-secondary"></span>
                                                                </a>
                                                            </div>
                                                            <h4 class="mb-0">{{ $pre_registration->first_name }} {{ $pre_registration->last_name }} </h4>
                                                            <p class="mb-0">
                                                                <i class="fe fe-map-pin me-1 fs-6"></i>Morocco
                                                            </p>
                                                        </div>
                                                        <div class="d-flex justify-content-between border-bottom py-2 mt-6">
                                                            <span>Payments</span>
                                                            <span class="text-dark">$1,220</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between border-bottom py-2">
                                                            <span>Joined :</span>
                                                            <span>{{ $pre_registration->created_at }}</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between pt-2">
                                                            <span>Courses</span>
                                                            <span class="text-dark"> {{ $pre_registration->nbr_of_enrolled_course }} </span>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        @endforeach
                                @endisset


                                    <!-- -->

                                </div>
                                <nav>
                                    <ul class="pagination justify-content-center pb-3 pt-4">
                                        {{ $pre_registrations->links() }}
                                    </ul>
                                </nav>
                            </div>
                            <!-- Tab Pane -->
                            <div class="tab-pane fade" id="tabPaneList" role="tabpanel" aria-labelledby="tabPaneList">
                                <!-- Card -->
                                <div class="card">
                                    <!-- Card Header -->
                                    <div class="card-header">
                                        <input type="search" class="form-control" placeholder="Search Students" />
                                    </div>
                                    <!-- Table -->
                                    <div class="table-responsive">
                                        <table class="table mb-0 text-nowrap">
                                            <thead class="table-light">
                                            <tr>
                                                <th scope="col" class="border-0">Name</th>
                                                <th scope="col" class="border-0">Enrolled</th>
                                                <th scope="col" class="border-0">Joined At</th>
                                                <th scope="col" class="border-0">
                                                    TotaL PAYMENT
                                                </th>
                                                <th scope="col" class="border-0">Locations</th>
                                                <th scope="col" class="border-0"></th>
                                                <th scope="col" class="border-0"></th>
                                                <th scope="col" class="border-0"></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex align-items-center">
                                                        <div class="position-relative">
                                                            <img src="../../assets/images/avatar/avatar-16.jpg" alt="" class="rounded-circle avatar-md me-2" />
                                                            <a href="#" class="position-absolute mt-5 ms-n4">
                                                                <span class="status bg-success"></span>
                                                            </a>
                                                        </div>
                                                        <h5 class="mb-0">Nia Sikhone</h5>
                                                    </div>
                                                </td>
                                                <td class="align-middle">12 Courses</td>
                                                <td class="align-middle">30 July, 2020</td>
                                                <td class="align-middle">$3,240</td>
                                                <td class="align-middle">New York</td>
                                                <td class="align-middle">
                                                    <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                </td>
                                                <td class="text-muted px-4 py-3 align-middle">
                                                        <span class="dropdown dropstart">
                                <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown5"
                                   data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                                  <i class="fe fe-more-vertical"></i>
                                </a>
                                <span class="dropdown-menu" aria-labelledby="courseDropdown5">
                                  <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                        </span>
                                                        </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex align-items-center">
                                                        <div class="position-relative">
                                                            <img src="../../assets/images/avatar/avatar-16.jpg" alt="" class="rounded-circle avatar-md me-2" />
                                                            <a href="#" class="position-absolute mt-5 ms-n4">
                                                                <span class="status bg-success"></span>
                                                            </a>
                                                        </div>
                                                        <h5 class="mb-0">Nia Sikhone</h5>
                                                    </div>
                                                </td>
                                                <td class="align-middle">12 Courses</td>
                                                <td class="align-middle">30 July, 2020</td>
                                                <td class="align-middle">$3,240</td>
                                                <td class="align-middle">New York</td>
                                                <td class="align-middle">
                                                    <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                </td>
                                                <td class="text-muted px-4 py-3 align-middle">
                                                        <span class="dropdown dropstart">
                                <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown5"
                                   data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                                  <i class="fe fe-more-vertical"></i>
                                </a>
                                <span class="dropdown-menu" aria-labelledby="courseDropdown5">
                                  <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                        </span>
                                                        </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex align-items-center">
                                                        <div class="position-relative">
                                                            <img src="../../assets/images/avatar/avatar-16.jpg" alt="" class="rounded-circle avatar-md me-2" />
                                                            <a href="#" class="position-absolute mt-5 ms-n4">
                                                                <span class="status bg-success"></span>
                                                            </a>
                                                        </div>
                                                        <h5 class="mb-0">Nia Sikhone</h5>
                                                    </div>
                                                </td>
                                                <td class="align-middle">12 Courses</td>
                                                <td class="align-middle">30 July, 2020</td>
                                                <td class="align-middle">$3,240</td>
                                                <td class="align-middle">New York</td>
                                                <td class="align-middle">
                                                    <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                </td>
                                                <td class="text-muted px-4 py-3 align-middle">
                                                        <span class="dropdown dropstart">
                                <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown5"
                                   data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                                  <i class="fe fe-more-vertical"></i>
                                </a>
                                <span class="dropdown-menu" aria-labelledby="courseDropdown5">
                                  <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                        </span>
                                                        </span>
                                                </td>
                                            </tr>

                                            <tr class="border-bottom">
                                                <td class="align-middle">
                                                    <div class="d-flex align-items-center">
                                                        <div class="position-relative">
                                                            <img src="../../assets/images/avatar/avatar-16.jpg" alt="" class="rounded-circle avatar-md me-2" />
                                                            <a href="#" class="position-absolute mt-5 ms-n4">
                                                                <span class="status bg-success"></span>
                                                            </a>
                                                        </div>
                                                        <h5 class="mb-0">Nia Sikhone</h5>
                                                    </div>
                                                </td>
                                                <td class="align-middle">12 Courses</td>
                                                <td class="align-middle">30 July, 2020</td>
                                                <td class="align-middle">$3,240</td>
                                                <td class="align-middle">New York</td>
                                                <td class="align-middle">
                                                    <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="#" class="text-muted" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                </td>
                                                <td class="text-muted px-4 py-3 align-middle">
                                                        <span class="dropdown dropstart">
                                <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown8"
                                   data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                                  <i class="fe fe-more-vertical"></i>
                                </a>

                                <span class="dropdown-menu" aria-labelledby="courseDropdown8">
                                  <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                        </span>
                                                        </span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <nav>
                                            <ul class="pagination justify-content-center pb-3 pt-4">
                                                <li class="page-item disabled">
                                                    <a class="page-link mx-1 rounded" href="#" tabindex="-1" aria-disabled="true"><i
                                                            class="mdi mdi-chevron-left"></i></a>
                                                </li>
                                                <li class="page-item active">
                                                    <a class="page-link mx-1 rounded" href="#">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link mx-1 rounded" href="#">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link mx-1 rounded" href="#">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link mx-1 rounded" href="#"><i class="mdi mdi-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
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
<script>
    $(document).ready(function(){
        $('#search').on('keyup',function (){
            var search =  $(this).val();
            let img = '';
            let firstName ;
            let lastName ;
            let time ;
            let unrolledCourses ;
            let cardUser = `<div class="card-body">
                                                        <div class="text-center">
                                                            <div class="position-relative d-flex justify-content-center">
                                                                <img src="http://localhost:8000/public/assets/student/${img}" class="rounded-circle avatar-xl mb-3" alt="" />
                                                                <a href="#" class="position-absolute mt-10 ms-n5">
                                                                    <span class="status bg-secondary"></span>
                                                                </a>
                                                            </div>
                                                            <h4 class="mb-0">${firstName} ${lastName} </h4>
                                                            <p class="mb-0">
                                                                <i class="fe fe-map-pin me-1 fs-6"></i>Morocco
                                                            </p>
                                                        </div>
                                                        <div class="d-flex justify-content-between border-bottom py-2 mt-6">
                                                            <span>Payments</span>
                                                            <span class="text-dark">$1,220</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between border-bottom py-2">
                                                            <span>Joined :</span>
                                                            <span>${time}</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between pt-2">
                                                            <span>Courses</span>
                                                            <span class="text-dark"> ${unrolledCourses} </span>
                                                        </div>

                                                    </div>
`
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });
            $.ajax({
                type : 'GET' ,
                url : "{{ route('search') }}",
                data : {"query" : search},
                contentType: "application/json",
                success: (response) => {
                    console.log(response)
                    response.forEach(el => {
                        img = el['avatar']
                        console.log(img)
                        firstName = el['first_name']
                        lastName = el['last_name']
                        time = new Date("1996-10-02").getDate()
                        unrolledCourses = el['id']
                        $('.card').append(cardUser)
                    })
                },
                error: function(response){
                    alert('error');
                }
            })


        });
    });

</script>
@endsection
