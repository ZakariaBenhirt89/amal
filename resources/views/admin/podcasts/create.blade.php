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
                                    <h1 class="text-white mb-1">Add New Podcast</h1>
                                    <p class="mb-0 text-white lead">
                                        Just fill the form and create your podcast.
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
                    <form  id="wizzard" enctype="multipart/form-data">
                    @csrf
                    <!-- Content one -->
                        <div class="card mb-3 ">
                            <div class="card-header border-bottom px-4 py-3">
                                <h4 style="text-align: end;" class="arab mb-0">معلومات اساسية</h4>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <div style="text-align: end;" class="mb-3">
                                    <label for="podcastTitle" class="arab form-label">عنوان التسجيل</label>
                                    <input style="direction: rtl;" id="podcastTitle" name="podcastTitle" class="form-control form-control-sm" type="text" required placeholder="عنوان الدورة"  />

                                </div>

                                <div style="text-align: end;" class="mb-3">
                                    <label class="arab form-label">تحميل التسجيل</label>
                                    <input type="file"
                                           class="filepondPodcast"
                                           name="filepondPodcast"
                                           data-max-file-size="500MB"
                                           data-max-files="1">
                                </div>

                            </div>
                            <div class="previewPod"></div>
                        </div>
                        <!-- Button -->
                        <div class="submit d-flex justify-content-center">
                            <button id="submission" class="btn btn-danger"  style="width: 10vw" disabled>
                                إرسال
                            </button>
                        </div>


                    </form>
                </div>
            </div>
            <!-- Modal -->

        </div>
    </div>
    <div class="modal" id="sentCourseModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close closeDataModal" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="waitWrapper">
                        <h2> The Data is sent to the cloud right now </h2>
                        <div class="loadingVideos d-flex justify-content-center" >
                            <lottie-player src=" {{ asset('assets/lotties/890-loading-animation.json') }}" background="transparent"  speed="0.5"  style="width: 600px; height: 600px;" loop autoplay ></lottie-player>
                        </div>
                    </div>
                    <div class="successUploadCloud" hidden>
                        <h2> Podcast is persisted in Amal cloud server  </h2>
                        <div class="d-flex justify-content-center" >
                            <lottie-player src=" {{ asset('assets/lotties/69021-success-interaction.json') }}" background="transparent"  speed="0.5"  style="width: 300px; height: 300px;" loop autoplay ></lottie-player>
                        </div>
                    </div>

                    <div class="failedUploadCloud" hidden>
                        <h2> Ops Server Error  </h2>
                        <div class=" d-flex justify-content-center" >
                            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_LlRvIg.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <!-- The modal  -->
@endsection()

@section('script')

<script>
    let formData = new FormData()
    const arrays = [null , undefined , '']
    document.querySelector('#podcastTitle').addEventListener('change' , function (evt) {
        evt.preventDefault()
        if (!arrays.includes(evt.target.value)){
            formData.append('podcastTitle' , evt.target.value)
        }else {
            formData.delete('podcastTitle')
        }
    })
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageExifOrientation,
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType,
    );
    const metaToken = $('meta[name="csrf-token"]').attr('content')
    FilePond.setOptions({
        server: {
            process: {
                url: '{{ route('admin.podcast.store') }}',
                method: 'POST',
                headers: {
                    'Access-Control-Allow-Origin':'{{ route('admin.podcast.store') }} | *',
                    'X-CSRF-TOKEN': metaToken ,
                    'Methods':'POST'
                }
            },
            revert: {
                url: '{{ route('admin.podcast.delete') }}',
                method: 'POST',
                headers: {
                    'Access-Control-Allow-Origin':'{{ route('admin.podcast.delete') }} | *',
                    'X-CSRF-TOKEN': metaToken,
                    '_method': 'DELETE'
                }
            }
        } });
    const filepond = FilePond.create(
        document.querySelector('.filepondPodcast') ,
        {
            acceptedFileTypes: ['audio/mp3' , 'audio/wav' , 'audio/mpeg'],
            fileValidateTypeDetectType: (source, type) =>
                new Promise((resolve, reject) => {
                    // Do custom type detection here and return with promise
                    console.log(type)
                    console.log('type checking')
                    resolve(type);
                }),
            onaddfile : (error , file)=>{
                if (error){
                    console.error(error)
                }else {
                    console.dir(file)
                    console.log(file.filename)

                }
            } ,
            onremovefile : (error , file)=> {
                if (error){
                    console.error(error)
                }else {
                    console.log('the file will be '+file.filename)
                    console.log(file.fileExtention)

                }
            } ,
            onprocessfile : (error , file) => {
                if (error){
                    console.log(error)
                }else {
                    console.dir(file.serverId)
                    formData.append('podcastUrl' ,JSON.parse(file.serverId)['result'])
                    $('#submission').prop('disabled' , false)
                    $('.previewPod').html(`<podcast-amal logo=https://res.cloudinary.com/daog54j96/image/upload/v1636460850/logo_yedftx.svg podcastSrc=${JSON.parse(file.serverId)['result']} coverSrc=https://res.cloudinary.com/daog54j96/image/upload/v1636735438/podcastsvg_xevc1a.svg></podcast-amal>`)
                }
            }
        }
    );
    document.querySelector('.filepond--credits').innerText = 'powred by AOBC'
    document.querySelector('#submission').addEventListener('click' , function (e) {
        e.preventDefault()
        $('#sentCourseModal').modal('toggle')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'X-Requested-With': 'XMLHttpRequest'
            }
        });
        $.ajax({
            type : 'POST' ,
            url : "{{ route('admin.podcast.data') }}",
            data : formData ,
            processData: false ,
            contentType: false ,
            success: (response) => {
                console.table(response)
                setTimeout(function () {
                    successAnimation()
                } , 5000)
            },
            error: function(response){
                console.log(response)
                setTimeout(function () {
                    failureAnimation()
                } , 5000)
            }
        })
    })
    function successAnimation(){
        document.querySelector('.waitWrapper').remove()
        $('#sentCourseModal .modal-header').css("background-color", "#19cb98");
        $('#sentCourseModal .modal-footer').css("background-color", "#19cb98");
        document.querySelector('.successUploadCloud').removeAttribute('hidden')
    }
    function failureAnimation(){
        //waitWrapper
        document.querySelector('.waitWrapper').remove()
        $('#sentCourseModal .modal-header').css("background-color", "#e53f3c");
        $('#sentCourseModal .modal-footer').css("background-color", "#e53f3c");
        document.querySelector('.failedUploadCloud').removeAttribute('hidden')
    }
</script>
@endsection
@section('credits')
    <script>
        window.onload = function (){
            document.querySelector('.filepondPodcast label').innerText = 'Please Drop the mp3 File here'
        }
    </script>
@endsection
