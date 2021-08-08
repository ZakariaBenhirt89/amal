<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\EvaluationRequest;
use App\Models\admin\monitoring;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function create(){
        return view('admin.evaluation.create');
    }
    public function store(EvaluationRequest $request){
        //AFTER VALIDATION
        $student_id = $request->student_id;
        $labels = $request->input('label', []);
        $notes  = $request->input('note', []);
        $starts = $request->input('start',[]);
        $ends   = $request->input('end',[]);
        for ($index=0; $index < count($labels); $index++) {

            $monitoring = monitoring::create([
                'student_id' => $student_id,
                'label'      => $labels[$index],
                'note'       => $notes[$index],
                'start'      => $starts[$index],
                'end'        => $ends[$index],
            ]);

        }

        //AFTRE INSRT

    }
}
