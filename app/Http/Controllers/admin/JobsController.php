<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index(){
        return view('admin.jobs_portal.index');
    }
    public function create(){
        return view('admin.jobs_portal.create');
    }
}
