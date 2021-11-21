<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\admin\Interships;
use App\Models\admin\jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllController extends Controller
{
    public function index(){
        $inerships = Interships::where('student_id', Auth::user()->id )->get();
        $jobs = jobs::where('student_id',Auth::user()->id)->get();

        return view('student.all_jobs_interships',compact(['inerships','jobs']));
    }
}
