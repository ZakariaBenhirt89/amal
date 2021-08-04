<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Pre_Registration_Request;
use App\Models\User;
use Faker\Provider\Image;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class Pre_registration_controller extends Controller
{
    public function index(){
        $pre_registrations = User::orderBy('id','desc')->paginate(10);
      //  return  $pre_registrations;
        return view('admin.pre_registration.index',compact('pre_registrations'));
    }
    public function create(){

        return view('admin.pre_registration.create');
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'image' =>  'required',
            'first_name' => 'required|string|min:3|max:255',
            'last_name' => 'required|string|min:3|max:255',
            'phone' => 'required|digits:10',
            'birth' => 'required|date',
            'level_scolaire' => 'required|integer',
            'situation_famille' => 'required|integer',
            'childrene' => 'required|string',
            'group' => 'required|string',
        ]);
        if (!$validator->passes()) {

            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);



        }else{

            $folderPath = public_path('assets/student/');

            $image_parts = explode(";base64,", $request->image);
            $image_type_aux = explode("image/", $image_parts[0]);

            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);

            $imageName = uniqid() . '.png';

            $imageFullPath = $folderPath.$imageName;

            file_put_contents($imageFullPath, $image_base64);
            $student = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->first_name,
                'avatar' =>  $imageName,
                'age' => '12',
                'family_situation' => $request->situation_famille,
                'total_score' => 0,
                'nbr_child' => $request->childrene,
                'nbr_of_enrolled_course' => 0,
                'education_years' => '2022',
                'cin' => $request->cin,
                'scolarity_level' => $request->level_scolaire,
                'phone' => $request->phone,
                'parent_phone' => $request->phone_parents,
                'groups' => $request->group,
                'status' => 'is_pending',
                'is_online' => '0',
            ]);
            if ($student){
                //return  redirect()->route('admin.pre_registration');
                return response()->json(['status'=>1, 'msg'=>'New Student has been successfully registered']);
            }

        }




    }
    public function searchStudent(Request $request){
        $search = $request->get('search_student');
        $students = DB::table('users')->where('first_name','like','%' . $search . '%' )->paginate(10);
        if ($students){
            return view('admin.pre_registration.pre_registration_search',compact('students'));
        }
    }



}
