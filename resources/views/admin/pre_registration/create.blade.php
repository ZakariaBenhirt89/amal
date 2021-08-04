
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
                                                <img style="height: 45px;margin-right: 6px;" src="{{ asset('assets/images/student_list.svg') }}" />Add Student
                                                <span class="fs-5 text-muted">(3)</span>
                                            </h1>
                                            <!-- Breadcrumb  -->
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item">
                                                        <a href=".#">Dashboard</a>
                                                    </li>

                                                    <li class="breadcrumb-item active" aria-current="page">
                                                        Students
                                                    </li>
                                                </ol>
                                            </nav>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div style="border-top: 2px solid #0f7a5b;" class="alert alert-success get_success_message" role="alert">
                                The Date Is Added With Success!
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <!-- Card -->
                                    <div class="card">

                                        <!-- Card header -->
                                        <div class="card-header">
                                            <h3 class="mb-0">Profile Details</h3>
                                            <p class="mb-0">
                                                You have full control to manage your own account setting.
                                            </p>
                                        </div>
                                        <!-- Card body -->
                                        <form id="main_form">
                                            @csrf
                                         <div class="card-body">
                                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                                     <div class="modal-dialog modal-lg" role="document">
                                                         <div class="modal-content">
                                                             <div class="modal-header">
                                                                 <h5 class="modal-title" id="modalLabel"> Crop Image Before Upload </h5>
                                                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                     <span aria-hidden="true">&times;</span>
                                                                 </button>
                                                             </div>
                                                             <div class="modal-body">
                                                                 <div class="img-container">
                                                                     <div class="row">
                                                                         <div class="col-md-8">
                                                                             <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                                                                         </div>
                                                                         <div class="col-md-4">
                                                                             <div class="preview"></div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="modal-footer">
                                                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                 <button type="button" class="btn btn-primary" id="crop">Crop</button>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>


                              <div class="d-lg-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center mb-4 mb-lg-0">
                                                    <input type="file" name="image" class="image">

                                                    <div style="position: relative;top: -19px;">
                                                        <h4 class="mb-0">Your avatar</h4>
                                                        <p class="mb-0">
                                                            PNG or JPG no bigger than 800px wide and tall.
                                                        </p>
                                                    </div>
                                                </div>


                                            </div>
                                             <h6 class="error_message" style="font-weight: bold;background: antiquewhite;padding: 6px;width: 50%;">
                                                 <span class="text-danger error-text image_error"></span>
                                             </h6>

                                            <hr style="margin-top: 0rem!important;" class="my-5">
                                            <div>
                                                <h4 class="mb-0">Personal Details</h4>
                                                <p class="mb-4">
                                                    Edit your personal information and address.
                                                </p>
                                                <!-- Form -->

                                                    <div class="row">
                                                    <!-- First name -->
                                                    <div class="mb-3 col-12 col-md-6">
                                                        <label class="form-label" for="fname">First Name</label>
                                                        <input type="text" id="fname" name="first_name" class="form-control form-control-sm first_name" placeholder="First Name" >
                                                        <h6 class="error_message" style="margin-top:5px; font-weight: bold;background: antiquewhite;padding: 6px;width: 50%;">
                                                          <span class="text-danger error-text first_name_error"></span>
                                                        </h6>
                                                    </div>
                                                    <!-- Last name -->
                                                    <div class="mb-3 col-12 col-md-6">
                                                        <label class="form-label" for="lname">Last Name</label>
                                                        <input type="text" id="lname" name="last_name" class="form-control form-control-sm last_name" placeholder="Last Name" >
                                                        <h6 class="error_message" style="margin-top:5px;font-weight: bold;background: antiquewhite;padding: 6px;width: 50%;">
                                                           <span class="text-danger error-text last_name_error"></span>
                                                        </h6>
                                                    </div>
                                                    <!-- Phone -->
                                                    <div class="mb-3 col-12 col-md-6">
                                                        <label class="form-label" for="phone">Phone Number</label>
                                                        <input type="text" id="phone" name="phone" class="form-control form-control-sm phone" placeholder="Phone" >
                                                        <h6 class="error_message" style="margin-top:5px;font-weight: bold;background: antiquewhite;padding: 6px;width: 50%;">
                                                           <span class="text-danger error-text phone_error"></span>
                                                        </h6>
                                                    </div>

                                                    <!-- Birthday -->
                                                    <div class="mb-3 col-12 col-md-6">
                                                        <label class="form-label" for="birth">Birthday</label>
                                                        <input class="form-control form-control-sm flatpickr flatpickr-input birth" type="text"  placeholder="Birth of Date" id="birth" name="birth" readonly="readonly">
                                                        <h6 class="error_message" style="margin-top:5px;font-weight: bold;background: antiquewhite;padding: 6px;width: 50%;">
                                                           <span class="text-danger error-text birth_error"></span>
                                                        </h6>
                                                    </div>

                                                    <!-- Address -->
                                                    <div class="mb-3 col-12 col-md-6">
                                                        <label class="form-label">Level</label>
                                                        <select class="selectpicker level_scolaire" name="level_scolaire" data-width="100%">
                                                            <option value="">Select Level</option>
                                                            <option value="1">Primary</option>
                                                            <option value="2">Middle School</option>
                                                            <option value="3">High School</option>
                                                        </select>
                                                        <h6 class="error_message" style="margin-top:5px;font-weight: bold;background: antiquewhite;padding: 6px;width: 50%;">
                                                          <span class="text-danger error-text level_scolaire_error"></span>
                                                        </h6>
                                                    </div>
                                                    <!-- Address -->
                                                    <div class="mb-3 col-12 col-md-6">
                                                        <label class="form-label" for="address2">Number parents</label>
                                                        <input type="text" name="phone_parents" id="address2" class="form-control form-control-sm phone_parents" placeholder="Number parents" required="">
                                                    </div>
                                                    <div class="mb-3 col-12 col-md-6">
                                                        <label class="form-label">Family Situation</label>
                                                        <select class="selectpicker situation_famille" name="situation_famille" data-width="100%">
                                                            <option value="">Select Family Situation</option>
                                                            <option value="1">Celibate</option>
                                                            <option value="2">Married</option>
                                                            <option value="3">Divorce</option>
                                                        </select>
                                                        <h6 class="error_message" style="margin-top:5px;font-weight: bold;background: antiquewhite;padding: 6px;width: 50%;">
                                                            <span class="text-danger error-text situation_famille_error"></span>
                                                        </h6>
                                                    </div>
                                                    <div class="mb-3 col-12 col-md-6">
                                                        <label class="form-label" for="address2">Children Number</label>
                                                        <input type="text" id="address2" name="childrene" class="form-control form-control-sm childrene" placeholder="Children Number" required="">
                                                        <h6 class="error_message" style="margin-top:5px;font-weight: bold;background: antiquewhite;padding: 6px;width: 50%;">
                                                            <span class="text-danger error-text childrene_error"></span>
                                                        </h6>
                                                    </div>
                                                    <div class="mb-3 col-12 col-md-6">
                                                        <label class="form-label" for="address2">Cin</label>
                                                        <input type="text" id="address2" name="cin" class="form-control form-control-sm cin" placeholder="Cin" required="">
                                                    </div>
                                                        <div class="mb-3 col-12 col-md-6">
                                                            <label class="form-label">Select Group</label>
                                                            <select class="selectpicker group" name="group" data-width="100%">
                                                                <option value="">Select Group</option>
                                                                <option value="1">GUILIZ</option>
                                                                <option value="2">TARGA</option>
                                                            </select>
                                                            <h6 class="error_message" style="margin-top:5px;font-weight: bold;background: antiquewhite;padding: 6px;width: 50%;">
                                                                <span class="text-danger error-text group_error"></span>
                                                            </h6>
                                                        </div>
                                                    <div class="mb-3 col-12 col-md-12">
                                                        <label class="form-label" for="address2">Address</label>
                                                        <textarea class="form-control form-control address" name="address" placeholder="Address"></textarea>
                                                    </div>
                                                    <!-- State -->

                                                    <!-- Country -->
                                                    <div class="mb-3 col-12 col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Note</label>
                                                            <div style="height: 99px !important;" id="editor">

                                                            </div>
                                                            <textarea style="display:none;" name="editor"></textarea>

                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <!-- Button -->
                                                        <button id="submit" class="btn btn-primary" type="submit">
                                                            Add Student
                                                        </button>
                                                    </div>

                                            </div>
                                        </div>
                                    </div>
                                        <form>
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

    // for editor text
    function getEditorContents(form){
        var html = document.getElementById("editor").innerHTML;
        form.editor.value = html;
        return true;
    }
</script>
<script>
    var $modal = $('#modal');
    var image = document.getElementById('image');
    var cropper;
    $("body").on("change", ".image", function(e){
        var files = e.target.files;

        var done = function (url) {
            image.src = url;
            $modal.modal('show');
        };
        var reader;
        var file;
        var url;
        if (files && files.length > 0) {
            file = files[0];
            if ( !(file.name.includes('.jpg') || file.name.includes('.png') || file.name.includes('.jpeg')) ){
                $('.image').val("");
                alert('this file is not supported!!!');

            }else{

                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }

            }


        }
    });
    $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 3,
            preview: '.preview'
        });
        // console.log(cropper);
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });
    let base64data ;
    const button = document.querySelector('#submit')
    $("#crop").click(function(){
        canvas = cropper.getCroppedCanvas({
            width: 160,
            height: 160,
        });
        canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                base64data = reader.result;
                $modal.modal('hide');
               // console.log( base64data.split(';base64,') );
            }
        });
    })
    let  first_name // $('.first_name');
    let  last_name        // $('.last_name');
    let  phone            // $('.phone');
    let  birth            // $('.birth');
    let level_scolaire    // $('.level_scolaire');
    let phone_parents     // $('.phone_parents');
    let situation_famille // $('.situation_famille');
    let childrene         // $('.childrene');
    let cin               // $('.cin');
    let address           // $('.address');
    let editor            // $('#editor');
    let group;
    $('.first_name').on('change', function (e) {
        e.preventDefault()
        first_name = e.target.value
    })
    $('.last_name').on('change', function (e) {
        e.preventDefault()
        last_name = e.target.value
    })
    $('.phone').on('change', function (e) {
        e.preventDefault()
        phone = e.target.value
    })
    $('.birth').on('change', function (e) {
        e.preventDefault()
        birth = e.target.value
    })
    $('.level_scolaire').on('change', function (e) {
        e.preventDefault()
        level_scolaire = e.target.value
    })
    $('.phone_parents').on('change', function (e) {
        e.preventDefault()
        phone_parents = e.target.value
    })
    $('.situation_famille').on('change', function (e) {
        e.preventDefault()
        situation_famille = e.target.value
    })
    $('.childrene').on('change', function (e) {
        e.preventDefault()
        childrene = e.target.value
    })
    $('.cin').on('change', function (e) {
        e.preventDefault()
        cin = e.target.value
    })
    $('.address').on('change', function (e) {
        e.preventDefault()
        address = e.target.value
    })
    $('.editor').on('change', function (e) {
        e.preventDefault()
        editor = e.target.value
    })
    $('.group').on('change', function (e) {
        e.preventDefault()
        group = e.target.value
    })



    button.addEventListener('click', function (e) {

        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'X-Requested-With': 'XMLHttpRequest'
            }
        });
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "store-pre-registration",
            data: {
                'image': base64data,
                'first_name': first_name,
                'last_name': last_name,
                'phone' : phone,
                'birth' : birth ,
                'level_scolaire' : level_scolaire ,
                'phone_parents': phone_parents ,
                'situation_famille' : situation_famille ,
                'childrene' : childrene ,
                'cin' : cin ,
                'address' : address ,
                'editor' : editor,
                'group'  : group,
            },
            beforeSend:function(){
                $(document).find('span.error-text').text('');
                // $(document).find('h6.error_message').hide();

            },
            success: function(data){
                if(data.status == 0){
                    $('h6.error_message').css('display','block');
                    $.each(data.error, function(prefix, val){
                        console.log( prefix );
                        $('span.'+prefix+'_error').text(val[0]);
                    });
                }else{
                    $('#main_form')[0].reset();
                    $('.get_success_message').css('display','block');
                    window.scrollTo(0, 0);
                    setTimeout(function(){
                        window.location.href = '{{ route('admin.pre_registration') }}';
                    }, 1000);

                    //  window.location.href = '{{ route('admin.pre_registration') }}'
                }

            }
        });

    })
</script>

@endsection
