<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function create(){
        return view('admin.evaluation.create');
    }
}
