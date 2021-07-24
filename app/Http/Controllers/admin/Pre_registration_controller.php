<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pre_registration_controller extends Controller
{
    public function index(){
        return view('admin.pre_registration.index');
    }
    public function create(){
        return view('admin.pre_registration.create');
    }
}
