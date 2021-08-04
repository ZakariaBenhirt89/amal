<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\cheif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChiefController extends Controller
{
    public function index(){
        return view('admin.instractor.index');
    }
    public function create(){
        return view('admin.instractor.create');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'image' =>  'required',
            'first_name' => 'required|string|min:3|max:255',
            'last_name' => 'required|string|min:3|max:255',
            'phone' => 'required|digits:10',
            'birth' => 'required|date',
            'gender' => 'required|integer',
            'email' => 'required|email|unique:cheifs',
            'center' => 'required|integer',
        ]);

        if (!$validator->passes()) {
             return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{


            $folderPath = public_path('assets/cheifs/');

            $image_parts = explode(";base64,", $request->image);
            $image_type_aux = explode("image/", $image_parts[0]);

            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);

            $imageName = uniqid() . '.png';

            $imageFullPath = $folderPath.$imageName;

            file_put_contents($imageFullPath, $image_base64);
            $cheifs = cheif::create([

                'first_name' => $request->first_name,
                'last_name' => $request->first_name,
                'avatar' =>  $imageName,
                'phone' => $request->phone,
                'birth' => $request->birth,
                'gender' => $request->gender,
                'email' => $request->email,
                'center' => $request->center,
                'address' => $request->address,

            ]);
            if ($cheifs){
                //return  redirect()->route('admin.pre_registration');
                return response()->json(['status'=>1, 'msg'=>'New Student has been successfully registered']);
            }


        }
    }

}
