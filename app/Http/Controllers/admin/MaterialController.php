<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Materiels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    //
    public function show(){
      return view('admin.materials.index');
    }
    public function create(){
        return view('admin.materials.create');
    }
    public function store(Request $request){
        Log::info('try to store');
        if ($request->has('matTitle')){
            Log::info('matTitle');
            Log::info( $request->get('matTitle'));
        }
        if ($request->hasFile('filepondMat')){
            Log::info('contain file');
            $path = $request->filepondMat->store('amalMaterials' , 'do-spaces' , 'public');
            return response()->json(['status' => 200 , 'result' => 'https://amalcenter.nyc3.cdn.digitaloceanspaces.com/'.$path]);
        }else{
            Log::info('not contained');
            return response()->json(['status' => 500 , 'result' => 'problem while dowloading material']);

        }

    }
    public function delete(Request $request){
        Log::info('the delete place');
        $payLoad = json_decode($request->getContent(), true);
        Log::info($payLoad['result']);
        $oldPath = $payLoad['result'];
        $newPath = str_replace('https://amalcenter.nyc3.cdn.digitaloceanspaces.com/' ,'' , $oldPath);
        if (Storage::disk('do-spaces')->exists($newPath)){
            $result =  Storage::disk('do-spaces')->delete($newPath);
            if ($result){
                return response()->json(['status' => 200 , 'result' => 'deleted ']);
            }else{
                return response()->json(['status' => 200 , 'result' => 'not deleted ']);
            }

        }else {
            return response()->json(['status' => 200 , 'result' => 'not exist ']);
        }


    }
    public function storeData(Request $request){
        $material = new Materiels();
        Log::info($request->get('matTitle'));
        $material->mat_title = $request->get('matTitle');
        Log::info($request->get('matLink'));
        $material->file_location = $request->get('matLink');
        $material->save();
    }
    public function  deleteMat(Request $request){
        $id = $request->query('id');
        Materiels::where('id' , $id)->delete();
        return response()->json(['status' => 200 , 'id' => $id]);
    }
}
