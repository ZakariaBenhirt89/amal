<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use  Illuminate\Http\UploadedFile;

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

        if ($request->input('name','images_name[]')){
            $target = $request->file('images_name[]');
            if ($request->hasFile('images_name[]')){
                Log::info("the file is there");
            }else{
                Log::info('notinhg there');
            }
         //   $token = $target->extension();
            Log::info( 'token');

        }else{
            Log::info('file not contained');
        }
        Log::info('its working');
       // error_log('this is nice');
        return response()->json([
            'success'=>'Got Simple Ajax Request.',
            'data' => $request->all(),
        ]);
    }
}
