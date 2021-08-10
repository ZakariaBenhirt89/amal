<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Dcblogdev\Dropbox\Facades\Dropbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use  Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Psy\Util\Str;

class CourseController extends Controller
{
    public function index(){
        return view('admin.courses.index');
    }
    public function create(){
        return view('admin.courses.create');
    }
    public function storeCourseThumn(Request $request){
     Log::info(json_encode($request->all()));
    }
    public function storeCourseIntro(Request $request){
     Log::info(json_encode($request->all()));
    }

    /**
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function storeCource(Request $request){
        $input = $request->all();
        Log::info(json_encode($input["courseThumbs"]));
        if ($request->ajax()){
            if (empty($request['courseThumbs'])){
                Log::info('empty container');

            }else {
                Log::info('not empty :)');
                Log::info($request->getBaseUrl());
                if ($request->hasFile('courseThumbs')){
                    $size = $request->file('courseThumbs')->getSize() ;
                    Log::info($size);
                    $path =  $request->file('courseThumbs')->storeAs('thumbs', 'thums.jpg' , 'public');
                    $result =  Dropbox::files()->upload('', '/home/zaki/projects/webprojects/lms_amal_tadribe/public/storage/'.$path );
                    Log::info($result);
                   // $path =  Storage::put('thumbs' , $request->file('courseThumbs') );
                    Log::info($path);
                    $results = Dropbox::files()->listContents('');
                    Log::info($results);
                }else {
                    Log::info('the type not supported');
                }

            }
            return response()->json([
                'success'=>'Got Simple Ajax Request.',
                'data' => $request->all(),
            ]);
        }


    }
}
