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
                                        <button type="button" class="step-trigger" role="tab" id="courseFormtrigger1" aria-controls="test-l-1" disabled>
                                            <span class="bs-stepper-circle">1</span>
                                            <span style="font-size: 20px;"  class="bs-stepper-label arab">معلومات اساسية</span>
                                        </button>
                                    </div>
                                    <div class="bs-stepper-line"></div>
                                    <div class="step" data-target="#test-l-2">
                                        <button type="button" class="step-trigger" role="tab" id="courseFormtrigger2" aria-controls="test-l-2" disabled>
                                            <span class="bs-stepper-circle">2</span>
                                            <span style="font-size: 20px;" class="bs-stepper-label arab">وسائط الدورة</span>
                                        </button>
                                    </div>
                                    <div class="bs-stepper-line"></div>
                                    <div class="step" data-target="#test-l-3">
                                        <button type="button" class="step-trigger" role="tab" id="courseFormtrigger3" aria-controls="test-l-3" disabled>
                                            <span class="bs-stepper-circle">3</span>
                                            <span style="font-size: 20px;" class="bs-stepper-label arab">مواد الدورة</span>
                                        </button >
                                    </div>
                                    <div class="bs-stepper-line"></div>
                                    <div class="step" data-target="#test-l-4">
                                        <button type="button" class="step-trigger" role="tab" id="courseFormtrigger4" aria-controls="test-l-4" disabled>
                                            <span class="bs-stepper-circle">4</span>
                                            <span style="font-size: 20px;" class="bs-stepper-label arab">متطلبات</span>
                                        </button>
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
                                            <button id="first_next_btn" class="btn btn-primary" onclick="courseForm.next()" disabled>
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
                                                        style="background-image: url({{ asset('assets/images/course/course-javascript.jpg') }});">
                                                        <a class="popup-youtube icon-shape rounded-circle btn-play icon-xl text-decoration-none"
                                                           href="https://www.youtube.com/watch?v=JRzWRZahOVU">
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
                                                <button class="btn btn-primary" id="second_next_btn" onclick="courseForm.next()" disabled>
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
                                                                    <h2 class="arab mb-0" style="text-align: end"> مواد  للدرس</h2>


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

                                                                                <span class='arab align-middle'>مادة 1</span>
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
                                                <button class="btn btn-primary" id="third_btn" onclick="courseForm.next()" disabled>
                                                    التالي
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Content four -->
                                        <div id="test-l-4" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger4">
                                            <!-- Card -->
                                            <div class="card mb-3  border-0">
                                                <div class="card-header border-bottom px-4 py-3">
                                                    <h4 class="mb-0">Requirements</h4>
                                                </div>
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <input name='tags' value='jquery, bootstrap' autofocus>
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
        let formData = {}

        $(document).ready(function () {
                var i=1;
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



            });

            $('#ProductTable').delegate('a.Delete', 'click', function () {
                i--;
                $(this).parent().parent().fadeOut('slow').remove();
                return false;
            });



        });

    </script>
    <script>

        $(document).ready(function () {
            var k=1;
            $("#btnAddNewPod").click(function () {
                k++;
                var rowNumberPoc = $("#ProductTablePodCast tbody tr").length;
                var trNewPoc = "";
                var addLinkPoc = "<div class=\"upload-btn-pod" + rowNumberPoc + "\"><div class='list-group list-group-flush border-top-0' id='courseList'><div id='courseOne'><div  class='list-group-item add_pod_cast rounded px-3 mb-1' id='introduction'><div class='d-flex align-items-center justify-content-between'><h5 class='mb-0'><a href='#' class='text-inherit' aria-expanded='true' data-bs-toggle='collapse' data-bs-target='#pod_cast"+`${k}`+"' aria-controls='collapselistOne'><span class='chevron-arrow'><i class='fe fe-chevron-down'></i></span></a></h5><div><a style='font-size: large;' href='#' class='text-inherit'><span class='arab align-middle'>بودكاس  "+`${k}`+"</span></a></div></div><div id='pod_cast"+`${k}`+"' class='collapse show' aria-labelledby='introduction' data-bs-parent='#courseList'><div class='card-body'><div style='text-align: end;' class='mb-3'><label class='arab form-label'>عنوان تدوين صوتي</label><input style='direction: rtl;' class='form-control form-control-sm' name='pod_cast_title[]' placeholder='عنوان تدوين صوتي' /></div><input style='direction: rtl;' type='file' name='pod_cast_file[]' class='form-control' id='inputLogo'></div></div></div></div></div></div>";
                var deleteRowPoc = "<a  href='#' href=\"javascript:void()\" class=\"Delete_Pod delete_item_pod me-1 text-inherit   btn-xs\"  data-bs-toggle='tooltip' data-placement='top' title='' data-bs-original-title='Delete' aria-label='Delete'><i class='fe fe-trash-2 fs-6 icon_item_podcats'></i></a>";
                trNewPoc = trNewPoc + "<tr> ";
                trNewPoc += "<td>" + addLinkPoc + "</td>";
                trNewPoc += "<td style=\"width:28px;\">" + deleteRowPoc + "</td>";
                trNewPoc = trNewPoc + " </tr>";

                $("#ProductTablePodCast tbody").append(trNewPoc);
                //console.log('addLinkPoc'+k);
            });
            $('#ProductTablePodCast').delegate('a.Delete_Pod', 'click', function () {
                k--;
                $(this).parent().parent().fadeOut('slow').remove();
                return false;
            });
        });

    </script>
    <script>
        var trackerBtn = 0 ;
        let defBtn = document.querySelector('#default-btn')
        let createdBtn ;
        $(document).ready(function () {
            var m=1;
            $("#btnAddNewMat").click(function () {
                trackerBtn++
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
                     console.log('inside the defBtn Handler')
                     console.log(this.files[0].name+ ' the file name ')
                     let img = document.querySelector(".imgPreview"+`${trackerBtn}`);
                     console.log('image '+img.class)
                     console.log(urls[3]);
                     const file = this.files[0];
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
                             wrapper.classList.add("active");
                         }
                         cancelBtn.addEventListener("click", function(){
                             img.src = "{{ asset('assets/images/3125018.jpg') }}";
                             wrapper.classList.remove("active");
                         })
                         reader.readAsDataURL(file);
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
        const fileName = document.querySelector(".file-name");
        const customBtn = document.querySelector("#custom-btn");
        const cancelBtn = document.querySelector("#cancel-btn i");
        const urls = ['{{ asset('assets/image_upload/pdf.svg') }}' , '{{ asset('assets/image_upload/jpg.svg') }}' , '{{ asset('assets/image_upload/ppt.svg') }}', '{{ asset('assets/image_upload/doc.svg') }}'];
        let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
        function defaultBtnActive(){
            defBtn.click();
        }
       defBtn.addEventListener("change", function(e){
           e.preventDefault();
           img.src

            let img = document.querySelector(".imgPreview"+`${trackerBtn}`);

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
                    wrapper.classList.add("active");
                }
                cancelBtn.addEventListener("click", function(){
                    img.src = "{{ asset('assets/images/3125018.jpg') }}";
                    wrapper.classList.remove("active");
                })
                reader.readAsDataURL(file);
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
    </script>
    <script>
        const  formdata1 = new FormData()
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
                formdata1.append('courseTitle',one)
                formdata1.append('courseCategory' , two)
                formdata1.append('courseShortDescreption' , tree)
                formdata1.append('courseDescreption' , forth)
                for (let ent of formdata1.entries()){
                    console.log(ent[0] +' ******* '+ent[1])
                }
                document.querySelector('#first_next_btn').disabled = false
            }
        })




    </script>
    <script>
        //second thing validation
        let formdata = new FormData()
        const firstInput2 = document.querySelector('.custom-file-container__custom-file__custom-file-input');
        const  secondInput2 = document.querySelector('.add_video_prom')
        console.log(firstInput2+" second")
        console.log(secondInput2+" second")
        let one2 , two2 ;
        firstInput2.addEventListener('change' , function (e){
            console.log('inside the first Input')
            one2 = e.target.value
            console.log('the one ' )
            console.table(e.target.files)
            formdata1.append('courseThumbs', e.target.files[0])
            for (let ent of formdata1.entries() ){
                console.log(ent[0] + ' ********* '+ent[1])
            }
            if (one2 === '' || two2 === '' || one2 == null || two2 == null ){
                console.log('the empty one')
                document.querySelector('#second_next_btn').disabled = true
            //    console.log(fifthInput2)
            }else {
                document.querySelector('#second_next_btn').disabled = false
            }
        })
        secondInput2.addEventListener('change' , function (e){
            console.log('inside the second input')
            two2 = e.target.value
            console.log('the second' , two2)
            if (one2 === '' || two2 === '' || one2 == null || two2 == null ){
                console.log('the empty one'+two2)
                document.querySelector('#second_next_btn').disabled = true
            }else {
                console.log('the non empty one'+two2)
                document.querySelector('#second_next_btn').disabled = false
            }
        })

    </script>
    <script>
        //third validation
       $(document).ready(function () {
           let holderPodcast = [];
           let holderVideos = []
           let counter = 0 ;

           document.querySelectorAll('[name="pod_cast_file[]"]').forEach( e => {
                   console.log(' a podcast '+ ++counter)
                   e.addEventListener('change' , function (evt) {
                       evt.preventDefault()
                       holderPodcast.push(evt.target.value)
                       console.log(evt.target.value)
                       console.log(holderPodcast)
                       if (holderPodcast.includes(null) || holderPodcast.includes('') || holderVideos.includes(null) || holderVideos.includes('') || holderPodcast.length === 0 || holderVideos.length === 0 ){
                           console.log('the empty one')
                           document.querySelector('#third_btn').disabled = true||
                           console.log('hoollle')
                       }else {
                           document.querySelector('#third_btn').disabled = false
                       }

                   })
               }
           )
           document.querySelectorAll('[name="video_file[]"]').forEach( e => {
                   console.log('a video '+ ++counter)
                   e.addEventListener('change' , function (evt) {
                       evt.preventDefault()
                       holderVideos.push(evt.target.value)
                       console.log(evt.target.value)
                       console.table(holderVideos)
                       if (holderPodcast.includes(null) || holderPodcast.includes('') || holderVideos.includes(null) || holderVideos.includes('') || holderPodcast.length === 0 || holderVideos.length === 0){
                           console.log('the empty one')
                           document.querySelector('#third_btn').disabled = true
                           console.log('hoollle')
                       }else {
                           document.querySelector('#third_btn').disabled = false
                       }

                   })
               }
           )

       })
    </script>
    <script>

                  document.querySelectorAll('button[onclick="courseForm.next()"]').forEach( ele => {
                      ele.addEventListener('click' , function (e) {
                          e.preventDefault()

                      });
                  });

                  document.querySelector('#custom-btn0').addEventListener('click' , function (el) {
                          el.preventDefault();
                      });




    </script>
    <script>
        //console.log(typeof(document.querySelector('#submition')))
        //first form

        $('.materiels_info').on('change' , function (e) {
            e.preventDefault()
            console.table(e.target.files)

        })
        $('#submition').on('click', function (e) {
            e.preventDefault()
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });
            $.ajax({
                type : 'POST' ,
                url : "{{ route('admin.course.store') }}",
                data : formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    console.table(response)
                    if (response) {
                        alert("you're working");
                    }
                },
                error: function(response){
                    alert('error');
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
@endsection
