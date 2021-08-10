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

            <div style="background: #18113c!important;" class="py-4 py-lg-6">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                            <div class="d-lg-flex align-items-center justify-content-between">
                                <!-- Content -->
                                <div class="mb-4 mb-lg-0">
                                    <h1 class="text-white mb-1">Add New Course</h1>
                                    <p class="mb-0 text-white lead">
                                        Just fill the form and create your courses.
                                    </p>
                                </div>
                                <div>
                                    <img height="120px" src="{{ asset('assets/images/logo_rtl.svg') }}" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="pb-12">
                <div class="container">
                    <div id="courseForm" class="bs-stepper">
                        <div class="row">
                            <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                                <!-- Stepper Button -->
                                <div style="direction: rtl" class="bs-stepper-header shadow-sm" role="tablist">
                                    <div class="step" data-target="#test-l-1">
                                        <div  class="step-trigger" role="tab" id="courseFormtrigger1" aria-controls="test-l-1" disabled>
                                            <span class="bs-stepper-circle">1</span>
                                            <span style="font-size: 20px;"  class="bs-stepper-label arab">معلومات اساسية</span>
                                        </div>
                                    </div>
                                    <div class="bs-stepper-line"></div>
                                    <div class="step" data-target="#test-l-2">
                                        <div  class="step-trigger" role="tab" id="courseFormtrigger2" aria-controls="test-l-2" disabled>
                                            <span class="bs-stepper-circle">2</span>
                                            <span style="font-size: 20px;" class="bs-stepper-label arab">وسائط الدورة</span>
                                        </div>
                                    </div>
                                    <div class="bs-stepper-line"></div>
                                    <div class="step" data-target="#test-l-3">
                                        <div type="button" class="step-trigger" role="tab" id="courseFormtrigger3" aria-controls="test-l-3" disabled>
                                            <span class="bs-stepper-circle">3</span>
                                            <span style="font-size: 20px;" class="bs-stepper-label arab">مواد الدورة</span>
                                        </div >
                                    </div>
                                    <div class="bs-stepper-line"></div>
                                    <div class="step" data-target="#test-l-4">
                                        <div type="button" class="step-trigger" role="tab" id="courseFormtrigger4" aria-controls="test-l-4" disabled>
                                            <span class="bs-stepper-circle">4</span>
                                            <span style="font-size: 20px;" class="bs-stepper-label arab">متطلبات</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Stepper content -->
                                <div class="bs-stepper-content mt-5">
                                    <form  id="wizzard" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Content one -->
                                        <div id="test-l-1" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger1">
                                            <!-- Card -->
                                            <div class="card mb-3 ">
                                                <div class="card-header border-bottom px-4 py-3">
                                                    <h4 style="text-align: end;" class="arab mb-0">معلومات اساسية</h4>
                                                </div>
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <div style="text-align: end;" class="mb-3">
                                                        <label for="courseTitle" class="arab form-label">عنوان الدورة</label>
                                                        <input style="direction: rtl;" id="courseTitle" name="course_name" class="form-control form-control-sm" type="text" required placeholder="عنوان الدورة"  />

                                                    </div>
                                                    <div style="text-align: end;" class="mb-3">
                                                        <label class="arab form-label" for="course_category">فئة الدورة</label>
                                                        <select id="course_category" style="direction: rtl;" name="course_category"  class="form-control form-control-sm arab" data-width="100%" required>
                                                            <option  value="">اختر الفئة</option>
                                                            <option value="1">الفئة1</option>
                                                            <option value="2">الفئة2</option>
                                                            <option value="3">الفئة3</option>

                                                        </select>

                                                    </div>
                                                    <div style="text-align: end;" class="mb-3">
                                                        <label class="arab form-label">وصف مختصر الدورة</label>
                                                        <textarea id="course_short_descreption" style="direction: rtl;" class="form-control form-control-sm" name="short_description" placeholder="وصف مختصر الدورة" required></textarea>

                                                    </div>
                                                    <div style="text-align: end;" class="mb-3">
                                                        <label class="arab form-label">وصف الدورة</label>
                                                        <textarea id="course_descreption" rows="10" style="direction: rtl;" name="description" class="form-control form-control-sm" placeholder="وصف الدورة" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <button id="first_next_btn" class="btn btn-primary"  disabled>
                                                التالي
                                            </button>
                                        </div>
                                        <!-- Content two -->
                                        <div id="test-l-2" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger2">
                                            <!-- Card -->
                                            <div class="card mb-3  border-0">
                                                <div class="card-header border-bottom px-4 py-3" disabled>
                                                    <h4 style="text-align: end;" class="arab mb-0">وسائط الدورة</h4>
                                                </div>
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <div class="custom-file-container fallback" data-upload-id="courseCoverImg" id="courseCoverImg">
                                                        <label style="width: 100%;text-align: end" class="arab form-label">صورة غلاف الدورة
                                                            <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                                               title="Clear Image"></a></label>
                                                        <label  class="custom-file-container__custom-file">
                                                            <input  type="file" name="course_image" class="custom-file-container__custom-file__custom-file-input"
                                                                    accept="image/*" required />
                                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" required />
                                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                        </label>
                                                        <small style="direction: rtl;" class="arab mt-3 d-block">قم بتحميل صورة الدورة التدريبية الخاصة بك هنا. يجب أن تفي بمعايير جودة صورة الدورة التدريبية لدينا حتى يتم قبولها. إرشادات مهمة: 750 × 440 بكسل ؛ .jpg ، .jpeg ،. gif أو png. لا يوجد نص على الصورة.</small>
                                                        <div  class="custom-file-container__image-preview"></div>
                                                    </div>
                                                    <div>
                                                        <div style="text-align: end;" class="mb-3">
                                                            <p style="text-align: end;" class="arab mb-1 text-dark">أضف فيديو</p>
                                                            <div class="input-group mb-1">
                                                                <input type="file" name="course_video" class="form-control add_video_prom" id="inputLogo" required />
                                                                <label class="arab input-group-text" for="inputLogo">Upload</label>
                                                            </div>
                                                            <small style="width:100%;text-align: end;" class="arab text-muted">(قم بتحميل شعار موقع الويب الخاص بك - 120 × 40)</small>

                                                        </div>
                                                    </div>

                                                    <div
                                                        class="mt-3 d-flex justify-content-center position-relative rounded py-14 border-white border rounded bg-cover"
                                                        style="background-image: url({{ asset('assets/images/course/thumbs.jpg') }});">
                                                        <a class="popup-youtube icon-shape rounded-circle btn-play icon-xl text-decoration-none"
                                                           href="">
                                                            <i class="fe fe-play fs-3"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-secondary" onclick="courseForm.previous()">
                                                    السابق
                                                </button>
                                                <button class="btn btn-primary" id="second_next_btn"  disabled>
                                                    التالي
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Content three -->
                                        <div id="test-l-3" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger3">
                                            <!-- Card -->
                                            <div class="card mb-3  border-0">
                                                <div class="card-header border-bottom px-4 py-3" disabled>
                                                    <h1 style="text-align: end" class="arab mb-0">مواد الدورة</h1>
                                                </div>
                                                <!-- videos -->
                                                <div class="card-body ">

                                                    <div class="bg-light rounded p-2 mb-4">
                                                        <div style="background: #ffd767;" class="card mb-4">
                                                            <!-- Card body -->
                                                            <div class="p-4 d-flex justify-content-between align-items-center">
                                                                <div class="nav btn-group flex-nowrap" role="tablist">

                                                                    <img width="40px" src="{{ asset('assets/images/video-marketing.svg') }}">
                                                                </div>
                                                                <div>
                                                                    <h2 class="arab mb-0">فيديوهات الدرس</h2>

                                                                </div>
                                                                <!-- Nav -->

                                                            </div>
                                                        </div>



                                                        <!-- List group -->
                                                        <div class="list-group list-group-flush border-top-0" id="courseList">
                                                            <div id="courseOne">
                                                                <div style="width: 100%;" class="list-group-item rounded px-3 mb-1" id="introduction">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <h5 class="mb-0">
                                                                            <a href="#" class="text-inherit" aria-expanded="true" data-bs-toggle="collapse"
                                                                               data-bs-target="#collapselistOne" aria-controls="collapselistOne">
                                                                                <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                                                            </a>
                                                                        </h5>
                                                                        <div>
                                                                            <a style="font-size: large;" href="#" class="text-inherit">

                                                                                <span class="arab align-middle">فيديو 1</span>
                                                                            </a>



                                                                        </div>
                                                                    </div>
                                                                    <div id="collapselistOne" class="collapse show" aria-labelledby="introduction"
                                                                         data-bs-parent="#courseList">
                                                                        <div class="card-body">
                                                                            <div style="text-align: end;" class="mb-3">
                                                                                <label class="arab form-label">عنوان الفيديو</label>
                                                                                <input style="direction: rtl;" name="video_name[]" class="form-control form-control-sm" placeholder="عنوان الفيديو" />

                                                                            </div>
                                                                            <input style="direction: rtl;" type="file" name="video_file[]" class="form-control" id="inputLogo">
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">


                                                                    <div class="input-group">

                                                                        <table id="ProductTable" style="width:100%;">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="upload-btn">




                                                                                    </div>
                                                                                </td>


                                                                            </tr>

                                                                            </tbody>
                                                                        </table>

                                                                    </div>
                                                                    <div id="pwindicator" class="pwindicator">
                                                                        <div class="bar"></div>
                                                                        <div class="label"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <a href="#" id="btnAddNew" class="btn btn-outline-primary btn-sm mt-3" data-bs-toggle="modal"
                                                           data-bs-target="#addLectureModal">Add Video +</a>
                                                    </div>


                                                </div>
                                                <!-- pod cast -->
                                                <div  class="card-body ">
                                                    <div class="bg-light rounded p-2 mb-4">
                                                        <div style="background: #ffd767;" class="card mb-4">
                                                            <!-- Card body -->
                                                            <div class="p-4 d-flex justify-content-between align-items-center">
                                                                <div class="nav btn-group flex-nowrap" role="tablist">

                                                                    <img width="40px" src="{{ asset('assets/images/podcast.svg') }}">
                                                                </div>
                                                                <div>
                                                                    <h2 class="arab mb-0" style="text-align: end"> بودكاس  للدرس</h2>


                                                                </div>
                                                                <!-- Nav -->

                                                            </div>
                                                        </div>



                                                        <!-- List group -->
                                                        <div class="list-group list-group-flush border-top-0" id="courseList">
                                                            <div id="courseOne">
                                                                <div style="width: 100%;" class="list-group-item rounded px-3 mb-1" id="introduction">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <h5 class="mb-0">
                                                                            <a href="#" class="text-inherit" aria-expanded="true" data-bs-toggle="collapse"
                                                                               data-bs-target="#pod_cast" aria-controls="collapselistOne">
                                                                                <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                                                            </a>
                                                                        </h5>
                                                                        <div>
                                                                            <a style="font-size: large;" href="#" class="text-inherit">

                                                                                <span class="arab align-middle">بودكاس  1</span>
                                                                            </a>



                                                                        </div>
                                                                    </div>
                                                                    <div id="pod_cast" class="collapse show" aria-labelledby="introduction"
                                                                         data-bs-parent="#courseList">
                                                                        <div class="card-body">
                                                                            <div style="text-align: end;" class="mb-3">
                                                                                <label class="arab form-label">عنوان تدوين صوتي</label>
                                                                                <input style="direction: rtl;" class="form-control form-control-sm" name="pod_cast_title[]" placeholder="عنوان تدوين صوتي" />

                                                                            </div>
                                                                            <input style="direction: rtl;" type="file" name="pod_cast_file[]" class="form-control" id="inputLogo">
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">


                                                                    <div class="input-group">

                                                                        <table id="ProductTablePodCast" style="width:100%;">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="upload-btn-pod">




                                                                                    </div>
                                                                                </td>


                                                                            </tr>

                                                                            </tbody>
                                                                        </table>

                                                                    </div>
                                                                    <div id="pwindicator" class="pwindicator">
                                                                        <div class="bar"></div>
                                                                        <div class="label"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <a href="#" id="btnAddNewPod" class="btn btn-outline-primary btn-sm mt-3" data-bs-toggle="modal"
                                                           data-bs-target="#addLectureModal">Add podcast +</a>
                                                    </div>


                                                </div>


                                                <div class="card-body ">
                                                    <div class="bg-light rounded p-2 mb-4">
                                                        <div style="background: #ffd767;" class="card mb-4">
                                                            <!-- Card body -->
                                                            <div class="p-4 d-flex justify-content-between align-items-center">
                                                                <div class="nav btn-group flex-nowrap" role="tablist">

                                                                    <img width="40px" src="{{ asset('assets/images/writing.svg') }}">
                                                                </div>
                                                                <div>
                                                                    <h2 class="arab mb-0" style="text-align: end"> مرفقات  للدرس</h2>


                                                                </div>
                                                                <!-- Nav -->

                                                            </div>
                                                        </div>



                                                        <!-- List group -->
                                                        <div class='list-group list-group-flush border-top-0' id='courseList'>
                                                            <div id='courseOne'>
                                                                <div style='width: 100%;' class='list-group-item rounded px-3 mb-1' id='introduction'>
                                                                    <div class='d-flex align-items-center justify-content-between'>
                                                                        <h5 class='mb-0'>
                                                                            <a href='#' class='text-inherit' aria-expanded='true' data-bs-toggle='collapse'
                                                                               data-bs-target='#materiels' aria-controls='collapselistOne'>
                                                                                <span class='chevron-arrow'><i class='fe fe-chevron-down'></i></span>
                                                                            </a>
                                                                        </h5>
                                                                        <div>
                                                                            <a style='font-size: large;' href='#' class='text-inherit'>

                                                                                <span class='arab align-middle'> مرفق </span>
                                                                            </a>



                                                                        </div>
                                                                    </div>
                                                                    <div id='materiels' class='collapse show' aria-labelledby='introduction'
                                                                         data-bs-parent='#courseList'>
                                                                        <div class='card-body'>
                                                                            <div style='text-align: end;' class='mb-3'>
                                                                                <label class='arab form-label'>عنوان المادة</label>
                                                                                <input style='direction: rtl;' class='form-control form-control-sm' name='materiel_name[]' placeholder='عنوان تدوين صوتي' />

                                                                            </div>
                                                                            <div style='text-align: end;' class='mb-3'>
                                                                                <label class='arab form-label'>وصف المادة</label>
                                                                                <textarea style='direction: rtl;'class='form-control form-control-sm' name='materiel_desc[]' placeholder='وصف المادة'></textarea>

                                                                            </div>
                                                                            <div class='wrapper'>

                                                                                <div class='image'>
                                                                                    <img  class="imgPreview0" src='{{ asset('assets/images/3125018.jpg') }}' alt=''>
                                                                                </div>
                                                                                <div class='content'>
                                                                                    <div class='icon'>
                                                                                        <i class='fas fa-cloud-upload-alt'></i>
                                                                                    </div>
                                                                                    <div class='text'>
                                                                                        No file chosen, yet!
                                                                                    </div>
                                                                                </div>
                                                                                <div id='cancel-btn'>
                                                                                    <i class='fas fa-times'></i>
                                                                                </div>
                                                                                <div class='file-name'>
                                                                                    File name here
                                                                                </div>
                                                                            </div>
                                                                            <div class='d-grid gap-2 col-6 mx-auto'>
                                                                                <button class='btn btn-outline-dark custom_materiels' onclick='defaultBtnActive()' id='custom-btn0'>Choose a file</button>
                                                                            </div>
                                                                            <input class="materiels_info form-control" id='default-btn' type='file' name='images_name[]'   hidden>

                                                                        </div>
                                                                    </div>
                                                                </div>




                                                            </div>

                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">


                                                                    <div class="input-group">

                                                                        <table id="ProductTableMateriels" style="width:100%;">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="upload-btn-mat">




                                                                                    </div>
                                                                                </td>


                                                                            </tr>

                                                                            </tbody>
                                                                        </table>

                                                                    </div>
                                                                    <div id="pwindicator" class="pwindicator">
                                                                        <div class="bar"></div>
                                                                        <div class="label"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <a href="#" id="btnAddNewMat" class="btn btn-outline-primary btn-sm mt-3" data-bs-toggle="modal"
                                                           data-bs-target="#addLectureModal">Add Material +</a>
                                                    </div>


                                                </div>
                                            </div>

                                            <!-- Button -->
                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-secondary" onclick="courseForm.previous()">
                                                    السابق
                                                </button>
                                                <button class="btn btn-primary" id="third_btn"  disabled>
                                                    التالي
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Content four -->
                                        <div id="test-l-4" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger4">
                                            <!-- Card -->
                                            {{--                                            <div class="card mb-3  border-0">--}}
                                            {{--                                                <div class="card-header border-bottom px-4 py-3">--}}
                                            {{--                                                    <h4 class="mb-0">Requirements</h4>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <!-- Card body -->--}}
                                            {{--                                                <div class="card-body">--}}
                                            {{--                                                    <input name='tags' value='jquery, bootstrap' autofocus>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            <div class="card mb-4 card-hover  ">
                                                <div class="row g-0">
                                                    <!-- Image -->
                                                    <a href="blog-single.html" class="col-lg-8 col-md-12 col-12 bg-cover img-left-rounded" style="background-image: url( {{ asset('assets/images/blog/blogpost-2.jpg') }});">
                                                        <img src=" {{ asset('assets/images/manuel-cosentino-M3fhZSBFoFQ-unsplash.jpg') }} " class="img-fluid d-lg-none invisible" alt=""></a>
                                                    <div class="col-lg-4 col-md-12 col-12">
                                                        <!-- Card Body -->
                                                        <div class="card-body">
                                                            <a href="#" class="badge bg-warning mb-3">Courses</a>
                                                            <h1 class="mb-4"> <a href="blog-single.html" class="text-inherit">
                                                                    Amal Tadrib Course Creator
                                                                </a>
                                                            </h1>
                                                            <p>the course will persisted in our servers databases
                                                            </p>
                                                            <!-- Media Content -->
                                                            <div class="row align-items-center g-0 mt-7">
                                                                <div class="col-auto">
                                                                    <img src=" {{ asset('assets/images/souad_quadi.jpeg') }}" alt="" class="rounded-circle avatar-sm me-2">
                                                                </div>
                                                                <div class="col lh-1 ">
                                                                    <h5 class="mb-1">Souad 👧 </h5>
                                                                    <p class="fs-6 mb-0 courseDay"></p>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <p class="fs-6 mb-0 courseDuration"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between mb-22">
                                                <!-- Button -->
                                                <button class="btn btn-secondary mt-5" onclick="courseForm.previous()">
                                                    Previous
                                                </button>
                                                <button  class="btn btn-danger mt-5" id="submition">
                                                    ارسال
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Sorry . the file type not supported
                                                </div>
                                                <div style="width:100%;height:0;padding-bottom:125%;position:relative;"><iframe src="https://giphy.com/embed/7OWKRDdPRgeJjARykf" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="exampleModal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Sorry . you reached the quota upload
                                                </div>
                                                <div style="width:100%;height:0;padding-bottom:56%;position:relative;"><iframe src="https://giphy.com/embed/3o7WIwkSmw32NgXvTG" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/3o7WIwkSmw32NgXvTG"></a></p>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Hahaha don't event Think
                                                </div>
                                                <div style="width:100%;height:0;padding-bottom:125%;position:relative;"><iframe src="{{ asset('assets/images/maroc-morocco.gif') }}" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
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
            <!-- Modal -->

        </div>
    </div>
    <!-- The modal  -->
@endsection()

@section('script')
    <script>
        let formData = {}
        let trackingPodcast = []
        let trackingVideos = []
        let holderPodcast = [];
        let holderVideos = []
        const  formdata = new FormData()
        let counter = 0 ;
        trackingVideos.push(document.querySelector('[name="video_file[]"]'))
        //
        trackingVideos[0].addEventListener('change' , function (evt) {
            if (trackingVideos.length === 5) {
                $('#exampleModal-3').modal('show')
                document.querySelector('#btnAddNew').remove()
            }
            evt.preventDefault()
            holderVideos.push(evt.target.value)
            console.log(evt.target.value)
            console.log(`%c ${this.files[0]}` , 'background : yellow;')
            formdata.append('videoData', this.files[0] , 'video0.mp4')
            console.table(holderVideos)
            if (!evt.target.value.includes('.mp4')) {
                $('#exampleModal-2').modal('show')
            } else {
                console.table(trackingVideos)
                if (holderPodcast.includes(null) || holderPodcast.includes('') || holderVideos.includes(null) || holderVideos.includes('') || holderPodcast.length === 0 || holderVideos.length === 0) {
                    console.log('the empty one')
                    document.querySelector('#third_btn').disabled = true
                } else {
                    console.log('%c is enabled', 'background : green')
                    document.querySelector('#third_btn').disabled = false
                }
            }
        } )
        trackingPodcast.push(document.querySelector('[name="pod_cast_file[]"]'))
        console.table(trackingPodcast)
        console.dir(trackingVideos)
        trackingPodcast[0].addEventListener('change', function (evt) {
            evt.preventDefault()
            holderPodcast.push(evt.target.value)
            console.log(evt.target.value)
            console.log(`%c ${this.files[0]}` , 'background : yellow;')
            formdata.append('podcast1' , this.files[0] , 'podcast1.mp3')
            console.table(holderPodcast)
            if (!evt.target.value.includes('.mp3')) {
                $('#exampleModal-2').modal('show')
                document.querySelector('#third_btn').disabled = true

            } else {
                if (holderPodcast.includes(null) || holderPodcast.includes('') || holderVideos.includes(null) || holderVideos.includes('') || holderPodcast.length === 0 || holderVideos.length === 0) {
                    console.log('the empty one for podcast')
                    document.querySelector('#third_btn').disabled = true
                } else {
                    console.log('it will be enabled')
                    document.querySelector('#third_btn').disabled = false
                }
            }
        })
        console.log('%c****************', 'background:green')
        console.table(trackingVideos)
        console.log('%c****************', 'background:green')
        console.log('%c****************', 'background:red')
        console.table(trackingPodcast)
        console.log('%c****************', 'background:red')
        document.querySelector('#third_btn').addEventListener('click' , function (event) {
            event.preventDefault() ;
            if (holderPodcast.includes(null) || holderPodcast.includes('') || holderVideos.includes(null) || holderVideos.includes('') || holderPodcast.length === 0 || holderVideos.length === 0) {
                console.log('the empty one')
                $('#exampleModal-4').modal('show')
            } else {
                courseForm.next()
                return true
            }
        })
   //add new video
        $(document).ready(function () {
            let i=1;
            $("#btnAddNew").click(function () {
                i++;
                var rowNumber = $("#ProductTable tbody tr").length;
                var trNew = "";
                var addLink = "<div class=\"upload-btn" + rowNumber + "\"><div class='list-group list-group-flush border-top-0' id='courseList'><div id='courseOne'><div  class='list-group-item add_videos rounded px-3 mb-1' id='introduction'><div class='d-flex align-items-center justify-content-between'><h5 class='mb-0'><a href='#' class='text-inherit' aria-expanded='true' data-bs-toggle='collapse' data-bs-target='#collapselist"+`${i}`+"' aria-controls='collapselistOne'><span class='chevron-arrow'><i class='fe fe-chevron-down'></i></span></a></h5><div><a href='#' class='text-inherit'><span class='arab align-middle'>فيديو "+ `${i}` +"</span></a></div></div><div id='collapselist"+`${i}`+"' class='collapse show' aria-labelledby='introduction' data-bs-parent='#courseList'><div class='card-body'><div style='text-align: end;' class='mb-3'><label class='arab form-label'>عنوان الفيديو</label><input style='direction: rtl;' name='video_name[]' class='form-control form-control-sm' placeholder='عنوان الفيديو' /></div><input style='direction: rtl;' type='file' name='video_file[]' class='form-control' id='inputLogo'></div></div></div></div></div></div>";
                var deleteRow = "<a  href='#' href=\"javascript:void()\" class=\"Delete delete_item me-1 text-inherit   btn-xs\"  data-bs-toggle='tooltip' data-placement='top' title='' data-bs-original-title='Delete' aria-label='Delete'><i class='fe fe-trash-2 fs-6 icon_item'></i></a>";
                trNew = trNew + "<tr> ";
                trNew += "<td>" + addLink + "</td>";
                trNew += "<td style=\"width:28px;\">" + deleteRow + "</td>";
                trNew = trNew + " </tr>";
                $("#ProductTable tbody").append(trNew);
                if (trackingPodcast.length === 5) {
                    $('#exampleModal-3').modal('show')
                    document.querySelector('#btnAddNewPod').remove()
                }
               // $("#ProductTablePodCast tbody").append(trNewPoc);
                //console.log('addLinkPoc'+k);
                console.table(trackingVideos)
                trackingVideos.push([].slice.call(document.querySelectorAll('[name="video_file[]"]')).pop())
                trackingVideos.forEach(e => {
                        console.log(e)
                        console.log(' a podcast ' + ++counter)
                        e.addEventListener('change', function (evt) {
                            evt.preventDefault()
                            trackingVideos.push(evt.target.value)
                            console.log(evt.target.value)
                            console.log(`%c ${this.files[0]}` , 'background : yellow;')
                            formdata.append('video'+i , this.files[0] , 'video'+i+'.mp4')
                            console.log(trackingVideos)

                            if (!evt.target.value.includes('.mp4')) {
                                $('#exampleModal-2').modal('show')
                                document.querySelector('#third_btn').disabled = true

                            } else {
                                if (holderPodcast.includes(null) || holderPodcast.includes('') || holderVideos.includes(null) || holderVideos.includes('') || holderPodcast.length === 0 || holderVideos.length === 0) {
                                    console.log('the empty one')
                                    document.querySelector('#third_btn').disabled = true
                                } else {
                                    document.querySelector('#third_btn').disabled = false
                                }
                            }

                        })
                    }
                )
            });
            $('#ProductTable').delegate('a.Delete', 'click', function () {
                i--;
                $(this).parent().parent().fadeOut('slow').remove();
                return false;
            });
        });



        var trackerBtn = 0 ;
        let defBtn = document.querySelector('#default-btn')
        let createdBtn ;
        $(document).ready(function () {
            let m = 1;
            $("#btnAddNewMat").click(function () {
                trackerBtn++
                if (trackerBtn === 4){
                    $('#exampleModal-3').modal('show')
                    $("#btnAddNewMat").remove()
                }
                console.log(trackerBtn+'*************')
                m++;
                var rowNumberMat = $("#ProductTableMateriels tbody tr").length;
                var trNewMat = "";
                var addLinkMat = "<div class=\"upload-btn-mat" + rowNumberMat + "\"> <div class='list-group list-group-flush border-top-0' id='courseList'><div id='courseOne'><div style='width: 100%;' class='list-group-item rounded px-3 mb-1' id='introduction'><div class='d-flex align-items-center justify-content-between'><h5 class='mb-0'><a href='#' class='text-inherit' aria-expanded='true' data-bs-toggle='collapse' data-bs-target='#materiels"+`${m}`+"' aria-controls='collapselistOne'><span class='chevron-arrow'><i class='fe fe-chevron-down'></i></span></a></h5><div><a style='font-size: large;' href='#' class='text-inherit'><span class='arab align-middle'>مادة "+`${m}`+"</span></a></div></div><div id='materiels"+`${m}`+"' class='collapse show' aria-labelledby='introduction' data-bs-parent='#courseList'><div class='card-body'><div style='text-align: end;' class='mb-3'><label class='arab form-label'>عنوان المادة</label><input style='direction: rtl;' class='form-control form-control-sm' name='materiel_name[]' placeholder='عنوان تدوين صوتي' /></div><div style='text-align: end;' class='mb-3'><label class='arab form-label'>وصف المادة</label><textarea style='direction: rtl;'class='form-control form-control-sm' name='materiel_desc[]' placeholder='وصف المادة'></textarea></div><div class='wrapper'><div class='image'><img class='imgPreview"+`${trackerBtn}`+"'  src='{{ asset('assets/images/3125018.jpg') }}' alt=''></div><div class='content'><div class='icon'><i class='fas fa-cloud-upload-alt'></i></div><div class='text'>No file chosen, yet!</div></div><div id='cancel-btn'><i class='fas fa-times'></i></div><div class='file-name'>File name here</div></div><div class='d-grid gap-2 col-6 mx-auto'><button class='btn btn-outline-dark custom_materiels' onclick='defaultBtnActive()' id='custom-btn"+`${trackerBtn}`+"'>Choose a file</button></div><input id='default-btn' type='file' name='images_name[]' class='form-control materiels_info' hidden></div></div></div></div></div></div>";
                var deleteRowMat = "<a  href='#' href=\"javascript:void()\" class=\"Delete_Mat  me-1 text-inherit   btn-xs\"  data-bs-toggle='tooltip' data-placement='top' title='' data-bs-original-title='Delete' aria-label='Delete'><i class='fe fe-trash-2 fs-6 icon_item_podcats'></i></a>";
                trNewMat = trNewMat + "<tr> ";
                trNewMat += "<td>" + addLinkMat + "</td>";
                trNewMat += "<td style=\"width:28px;\">" + deleteRowMat + "</td>";
                trNewMat = trNewMat + " </tr>";
                $("#ProductTableMateriels tbody").append(trNewMat);

                createdBtn = document.querySelector("#default-btn[name=images_name"+`${trackerBtn}`+"]");
                let img = document.querySelector(".imgPreview"+`${trackerBtn}`)
                console.log('the def button name ++++++ ' + createdBtn.name)
                console.log('the def img name +++++++++++' + img.className)
                createdBtn.addEventListener('change' , function (e){
                    e.preventDefault()
                    console.log('inside the new One Handler')
                    console.log(this.files[0].name+ ' the file name ')
                    let img = document.querySelector(".imgPreview"+`${trackerBtn}`);
                    console.log('image '+img.class)
                    console.log(urls[3]);
                    const file = this.files[0];
                    formdata.append('Material'+trackerBtn , file)
                    console.log(file.name);
                    const mathPdf = file.name.includes('.pdf');
                    const matchImg = file.name.toLowerCase().includes('.jpeg') || file.name.toLowerCase().includes('.jpg') || file.name.toLowerCase().includes('.png');
                    const wordMatch = file.name.toLowerCase().includes('.doc');
                    const  pptMatch = file.name.toLowerCase().includes('.ppt');
                    if(file){
                        console.log('file is true !!!!!!!!!!!!')
                        const reader = new FileReader();
                        reader.onload = function(){
                            console.log('on loading !!!!!!!!!!!!!')
                            const result = reader.result;
                            if (wordMatch){
                                console.log(" it's a word ")
                                img.src = urls[3]
                            }
                            if(matchImg){
                                console.log("it's a img")
                                img.src = urls[1]
                            }
                            if(mathPdf){
                                console.log("it's a pdf")
                                img.src = urls[0]
                            }
                            if (!wordMatch && !matchImg && ! mathPdf){
                                $('#exampleModal-2').modal('show')
                            }
                            wrapper.classList.add("active");
                        }
                        cancelBtn.addEventListener("click", function(){
                            img.src = "{{ asset('assets/images/3125018.jpg') }}";
                            wrapper.classList.remove("active");
                        })
                    }
                    if(this.value){
                        let valueStore = this.value.match(regExp);
                        fileName.textContent = valueStore;
                    }

                })
                //console.log('hello !!');
            });
            $('#ProductTableMateriels').delegate('a.Delete_Mat', 'click', function () {
                m--;
                $(this).parent().parent().fadeOut('slow').remove();
                return false;
            });
        });
        document.querySelector('#btnAddNewMat').addEventListener('click' , function (e) {
            document.querySelectorAll('#custom-btn'+`${trackerBtn}`).forEach(e => e.addEventListener('click' , function (e) {
                e.preventDefault()
            }))
        })
        const wrapper = document.querySelector(".wrapper");
        const fileName = [].slice.call(document.querySelectorAll(".file-name")).pop();
        console.log(`%c the filename ${fileName}`, 'background : red')
        const customBtn = document.querySelector("#custom-btn");
        const cancelBtn = document.querySelector("#cancel-btn i");
        const urls = ['{{ asset('assets/image_upload/pdf.svg') }}' , '{{ asset('assets/image_upload/jpg.svg') }}' , '{{ asset('assets/image_upload/ppt.svg') }}', '{{ asset('assets/image_upload/doc.svg') }}'];
        let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
        function defaultBtnActive(){
            defBtn.click();
        }
        defBtn.addEventListener("change", function(e){
            e.preventDefault();

            let img = document.querySelector(".imgPreview"+`${trackerBtn}`);
            console.log(`%c the img ${img}` , 'background : yellow')
            console.log(`%c the fileName ${fileName}` , 'background : green')
            const file = this.files[0];
            const mathPdf = file.name.includes('.pdf');
            const matchImg = file.name.toLowerCase().includes('.jpeg') || file.name.toLowerCase().includes('.jpg') || file.name.toLowerCase().includes('.png');
            const wordMatch = file.name.toLowerCase().includes('.doc');
            const  pptMatch = file.name.toLowerCase().includes('.ppt');
            if(file){
                const reader = new FileReader();
                reader.onload = function(){

                    const result = reader.result;
                    if (wordMatch){
                        console.log(" it's a word ")
                        img.src = urls[3]
                    }
                    if(matchImg){
                        console.log("it's a img")
                        img.src = urls[1]
                    }
                    if(mathPdf){
                        console.log("it's a pdf")
                        img.src = urls[0]
                    }
                    if (!mathPdf && !matchImg && !wordMatch){
                        $('#exampleModal-2').modal('show')
                    }
                    wrapper.classList.add("active");
                }
                cancelBtn.addEventListener("click", function(){
                    img.src = "{{ asset('assets/images/3125018.jpg') }}";
                    wrapper.classList.remove("active");
                })
                reader.readAsDataURL(file);
                formdata.append('Material0' , file )

            }
            if(this.value){
                let valueStore = this.value.match(regExp);
                fileName.textContent = valueStore;
            }
        });
        const targetNode = document.body;
        const config = { childList: true, subtree: true };

        const callback = function(mutationsList, observer) {
            for(let mutation of mutationsList) {
                if (mutation.type === 'childList') {
                    document.querySelector('#custom-btn'+`${trackerBtn}`).addEventListener('click' , function (e) {
                        e.preventDefault()
                    })
                }
            }
        };

        const observer = new MutationObserver(callback);
        observer.observe(targetNode, config);
        // first validation
        const firstInput = document.querySelector('#courseTitle');
        const  secondInput = document.querySelector('#course_category')
        const thirdInput = document.querySelector('#course_short_descreption')
        const  forthInput = document.querySelector('#course_descreption')
        const  fifthInput  = document.querySelector('#first_next_btn')
        console.log(firstInput)
        let one , two , tree , forth  ;
        firstInput.addEventListener('change' , function (e){
            console.log('inside the first Input')
            one = e.target.value
            console.log('the one ' , one)
            if (one === '' ){
                console.log('the empty one')
                document.querySelector('#first_next_btn').disabled = true
                console.log(fifthInput)
            }else {
                document.querySelector('#first_next_btn').disabled = false
            }
        })
        secondInput.addEventListener('change' , function (e){
            console.log('inside the second input')
            two = e.target.value
            console.log('the second' , two)
            if (two === '' || two === undefined ){
                console.log('the empty one')
                document.querySelector('#first_next_btn').disabled = true
                console.log(fifthInput)
            }else {
                document.querySelector('#first_next_btn').disabled = false
            }
        })
        thirdInput.addEventListener('change' , function (e){
            console.log('inside the third input')
            tree = e.target.value
            console.log('the third' , tree)
            if (tree === '' ){
                console.log('the empty one')
                document.querySelector('#first_next_btn').disabled = true
                //  console.log(fifthInput)
            }else {
                document.querySelector('#first_next_btn').disabled = false
            }
        })
        forthInput.addEventListener('change' , function (e) {
            console.log('inside the forth input')
            forth = e.target.value
            console.log('the forth ' , forth)
            if (forth === '' ){
                console.log('the empty one')
                document.querySelector('#first_next_btn').disabled = true
                console.log(fifthInput)
            }else {
                formdata.append('courseTitle',one)
                formdata.append('courseCategory' , two)
                formdata.append('courseShortDescreption' , tree)
                formdata.append('courseDescreption' , forth)
                for (let ent of formdata.entries()){
                    console.log(`%c ${ent[0]}  *******  ${ent[1]}` , 'background: #222; color: #bada55')
                }
                document.querySelector('#first_next_btn').disabled = false
            }
        })
        document.querySelector('#first_next_btn').addEventListener('click' , function (e) {
            if (one === '' || two === '' || tree === '' || forth === '' || one === undefined || two === undefined || tree === undefined || forth === undefined ){
                e.preventDefault()
                $('#exampleModal-4').modal('show')
            }else {
                console.log(one , two , tree , forth)
                console.log('the next page')
                courseForm.next();
            }
        })




        // second validation
        const firstInput2 = document.querySelector('.custom-file-container__custom-file__custom-file-input');
        const  secondInput2 = document.querySelector('.add_video_prom')
        console.log(firstInput2+" second")
        console.log(secondInput2+" second")
        let one2 , two2 ;
        firstInput2.addEventListener('change' , function (e){
            console.log('inside the first Input')
            one2 = e.target.value
            console.log('the one ' )
            if( !(one2.includes('.jpeg') || one2.includes('.jpg') || one2.includes('.png')) ){
                $('#exampleModal-2').modal('show')
                document.querySelector('#second_next_btn').disabled = true
            }else {
                if (one2 === '' || two2 === '' || one2 == null || two2 == null ){
                    console.log('the empty one')
                    document.querySelector('#second_next_btn').disabled = true
                    //    console.log(fifthInput2)
                }else {
                    document.querySelector('#second_next_btn').disabled = false
                }
            }
            console.log('files location *************** ')
            console.table(e.target.files[0])
            console.log('files location *************** ')
            formdata.append('courseThumbs', e.target.files[0] , 'thumbs.jpg')
           // formdata.append('courseThumbsPath' , )
            for (let ent of formdata.entries() ){
                console.log(`%c${ent[0]}  ' ********* '  ${ent[1]}` , 'background : blue')
            }

        })
        secondInput2.addEventListener('change' , function (e){
            console.log('inside the second input')
            two2 = e.target.value
            console.log('the second' , two2)
            if (! two2.includes('.mp4')){
                $('#exampleModal-2').modal('show')
                document.querySelector('#second_next_btn').disabled = true
            }else {
                if (one2 === '' || two2 === '' || one2 == null || two2 == null ){
                    console.log('the empty one'+two2)
                    document.querySelector('#second_next_btn').disabled = true
                }else {
                    console.log('the non empty one'+two2)
                    document.querySelector('#second_next_btn').disabled = false
                }
            }
        })
        //second go button
        document.querySelector('#second_next_btn').addEventListener('click',function (e) {
                if (one2 === '' || two2 === '' || one2 == null || two2 == null ){
                    console.log(" Hello it's empty for the go button in the second ")
                    $('#exampleModal-4').modal('show')
                }else {
                    e.preventDefault()
                    courseForm.next()
                    return true;
                }
            }
        )


        //podcast handler
        $(document).ready(function () {
            var k = 1;
            trackingPodcast.forEach(e => {
                    console.log(e)
                    console.log(' a podcast ' + ++counter)
                    e.addEventListener('change', function (evt) {
                        evt.preventDefault()
                        holderPodcast.push(evt.target.value)
                        console.log(evt.target.value)
                        console.log(holderPodcast)
                        formdata.append('podcast0', this.files[0] , 'podcast0.mp3')
                        if (!evt.target.value.includes('.mp3')) {
                            $('#exampleModal-2').modal('show')
                            document.querySelector('#third_btn').disabled = true

                        } else {
                            if (holderPodcast.includes(null) || holderPodcast.includes('') || holderVideos.includes(null) || holderVideos.includes('') || holderPodcast.length === 0 || holderVideos.length === 0) {
                                console.log('the empty one')
                                document.querySelector('#third_btn').disabled = true
                            } else {
                                document.querySelector('#third_btn').disabled = false
                            }
                        }

                    })
                }
            )
            $("#btnAddNewPod").click(function () {
                k++;
                var rowNumberPoc = $("#ProductTablePodCast tbody tr").length;
                var trNewPoc = "";
                var addLinkPoc = "<div class=\"upload-btn-pod" + rowNumberPoc + "\"><div class='list-group list-group-flush border-top-0' id='courseList'><div id='courseOne'><div  class='list-group-item add_pod_cast rounded px-3 mb-1' id='introduction'><div class='d-flex align-items-center justify-content-between'><h5 class='mb-0'><a href='#' class='text-inherit' aria-expanded='true' data-bs-toggle='collapse' data-bs-target='#pod_cast" + `${k}` + "' aria-controls='collapselistOne'><span class='chevron-arrow'><i class='fe fe-chevron-down'></i></span></a></h5><div><a style='font-size: large;' href='#' class='text-inherit'><span class='arab align-middle'>بودكاس  " + `${k}` + "</span></a></div></div><div id='pod_cast" + `${k}` + "' class='collapse show' aria-labelledby='introduction' data-bs-parent='#courseList'><div class='card-body'><div style='text-align: end;' class='mb-3'><label class='arab form-label'>عنوان تدوين صوتي</label><input style='direction: rtl;' class='form-control form-control-sm' name='pod_cast_title[]' placeholder='عنوان تدوين صوتي' /></div><input style='direction: rtl;' type='file' name='pod_cast_file[]' class='form-control' id='inputLogo'></div></div></div></div></div></div>";
                var deleteRowPoc = "<a  href='#' href=\"javascript:void()\" class=\"Delete_Pod delete_item_pod me-1 text-inherit   btn-xs\"  data-bs-toggle='tooltip' data-placement='top' title='' data-bs-original-title='Delete' aria-label='Delete'><i class='fe fe-trash-2 fs-6 icon_item_podcats'></i></a>";
                trNewPoc = trNewPoc + "<tr> ";
                trNewPoc += "<td>" + addLinkPoc + "</td>";
                trNewPoc += "<td style=\"width:28px;\">" + deleteRowPoc + "</td>";
                trNewPoc = trNewPoc + " </tr>";
                if (trackingPodcast.length === 5) {
                    $('#exampleModal-3').modal('show')
                    document.querySelector('#btnAddNewPod').remove()
                }
                $("#ProductTablePodCast tbody").append(trNewPoc);
                //console.log('addLinkPoc'+k);
                console.table(trackingPodcast)
                trackingPodcast.push([].slice.call(document.querySelectorAll('[name="pod_cast_file[]"]')).pop())
                trackingPodcast.forEach(e => {
                        console.log(e)
                        console.log(' a podcast ' + ++counter)
                        e.addEventListener('change', function (evt) {
                            evt.preventDefault()
                            holderPodcast.push(evt.target.value)
                            console.log(evt.target.value)
                            console.log(`%c ${this.files[0]}` , 'background : yellow;')
                            console.log(holderPodcast)
                              formdata.append('podcast'+k , this.files[0] , 'podcast'+k+'.mp3') ;
                            if (!evt.target.value.includes('.mp3')) {
                                $('#exampleModal-2').modal('show')
                                document.querySelector('#third_btn').disabled = true

                            } else {
                                if (holderPodcast.includes(null) || holderPodcast.includes('') || holderVideos.includes(null) || holderVideos.includes('') || holderPodcast.length === 0 || holderVideos.length === 0) {
                                    console.log('the empty one')
                                    document.querySelector('#third_btn').disabled = true
                                } else {
                                    document.querySelector('#third_btn').disabled = false
                                }
                            }

                        })
                    }
                )
            });
            $('#ProductTablePodCast').delegate('a.Delete_Pod', 'click', function () {
                k--;
                $(this).parent().parent().fadeOut('slow').remove();
                return false;
            });
        })



        document.querySelectorAll('button[onclick="courseForm.next()"]').forEach( ele => {
            ele.addEventListener('click' , function (e) {
                e.preventDefault()

            });
        });

        document.querySelector('#custom-btn0').addEventListener('click' , function (el) {
            el.preventDefault();
        });


        $('.materiels_info').on('change' , function (e) {
            e.preventDefault()
            console.table(e.target.files)

        })
        $('#submition').on('click', function (e) {
            e.preventDefault()
            for(element of formdata.entries()){
                console.log(`%c${element[0]} ************* ${element[1]}` , 'background : green;')
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });
            $.ajax({
                type : 'POST' ,
                url : "{{ route('admin.course.store') }}",
                data : formdata ,
                processData: false ,
                contentType: false ,
                success: (response) => {
                    console.table(response)

                },
                error: function(response){
                    console.log(response)
                }
            })
        })
        // $('#submition').on('click', function (e) {
        //     e.preventDefault();
        //     let file_name = $(".materiels_info").val();
        //     let _token   = $('meta[name="csrf-token"]').attr('content');
        //     console.log(file_name);
        // });

    </script>
    <script>
    </script>
    <style>
        .step {
            pointer-events:none;
        }
    </style>
@endsection
