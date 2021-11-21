<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\admin\PodCast;

use App\Models\admin\Quizze;
use App\Models\Materiels;
use App\Models\Video;
use App\Models\VideoDetails;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Dcblogdev\Dropbox\Facades\Dropbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Log;
use  Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Predis;
use App\Models\admin\Cource;
use Ramsey\Uuid\Uuid;

class CourseController extends Controller
{
    public function index(){
        return view('admin.courses.index');
    }
    public function search(Request $request){

    }
    public function create(){
        $data = array() ;
        foreach (Cource::all() as $cource){
            $videos = $cource->videos();
            array_push($data , $videos);
        }
        Log::info(json_encode($data));
        return view('admin.courses.create' );
    }
    public function storeCourseThumn(Request $request){
     Log::info(json_encode($request->all()));
    }
    public function storeCourseIntro(Request $request){
     Log::info(json_encode($request->all()));
    }

    /**
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     * @throws \Exception
     */
    public function storeCource(Request $request){
        $video = new Video();
        if ($request->has('courseTitle')){
            Log::info('courseTitle');
            $video->videoCourseTitle = $request->get('courseTitle');
        }
        if ($request->has('courseTeacher')){
            Log::info('courseTeacher');
            $video->instructor = $request->get('courseTeacher');
        }
        if ($request->has('course_descreption')){
            Log::info('course_descreption');
        }
        if ($request->has('courseThumbs')){
            Log::info('courseThumbs');
            if ( $request->courseThumbs != null){
                $path = $request->courseThumbs->store('videoThumbs' , 'do-spaces' , 'public');
                $video->thumbs = 'https://amalcenter.nyc3.cdn.digitaloceanspaces.com/'.$path;
            }else{
                $video->thumbs  = $request->courseThumbs->storeOnCloudinaryAs('courseThumbs')->getPath();
            }

        }
        if ($request->has('course')){
            Log::info('course');
            $video->videoCourceUrl = $request->get('course');
        }
        if ($request->has('videoDuration')){
            Log::info('videoDuration');
            $video->duration = $request->get('videoDuration');
        }
        $video->save();

        return response()->json([
            'success'=>'Got Simple Ajax Request.',
            'data' => $request->all(),
        ]);

    }
    public function storeVideo(Request $request){
        Log::info('test one');

          if ($request->hasFile('filepondCourse')){
          Log::info('it has the course video');
          $path = $request->filepondCourse->store('amalCourses' , 'do-spaces' , 'public');
          return response()->json(['status' => 200 , 'result' => 'https://amalcenter.nyc3.cdn.digitaloceanspaces.com/'.$path]);
          }else{
              Log::info('nothing there');
          }

    }
    public function deleteVideo(Request $request ){
            Log::info('the delete place');
            $payLoad = json_decode($request->getContent(), true);
            Log::info($payLoad['result']);
            $path = str_replace('https://amalcenter.nyc3.cdn.digitaloceanspaces.com/' ,'',$payLoad['result'] );
            if ( Storage::disk('do-spaces')->exists($path)){
                Storage::disk('do-spaces')->delete($payLoad['result']);
                return response()->json(['status' => 200 , 'result' => 'deleted ']);
            }else{
                return response()->json(['status' => 200 , 'result' => 'video not deleted ']);
            }


    }
}
