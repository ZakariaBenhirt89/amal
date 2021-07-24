<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChiefController extends Controller
{
    public function index(){
        return view('admin.instractor.index');
    }
    public function create(){
        return view('admin.instractor.create');
    }

}
