<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index(){
        //return 'welcome admin!!';
        return view('admin.index');
    }
    public function adminlogout(Request $request){

        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        return redirect('/login/admin');


    }


}
