<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login/student', 'App\Http\Controllers\Auth\AuthenticatedSessionController@showStudentLoginForm')->name('student.login');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




Route::get('/',function(){
   return view('landing_page.index');
});




//Route::get('/login/student', [App\Http\Controllers\LoginController::class, 'showStudentLoginForm']);


Route::group(['middleware' => 'auth:web'], function () {
    Route::group(['prefix' => 'student'], function () {
        Route::get('/dashboard/','App\Http\Controllers\student\StudentDashboardController@index')->name('student.dashboard');


    });
});

//Route::get('/dashboard', [App\Http\Controllers\LoginController::class, 'dashboard'])->name('dashboard.route');
Route::post('course/thumbs' , 'App\Http\Controllers\admin\CourseController@storeCourseThumn')->name('course.thumbs');
Route::post('course/intro' , 'App\Http\Controllers\admin\CourseController@storeCourseIntro')->name('course.intro');
Route::get('search', function(Request $request) {
    \Illuminate\Support\Facades\Log::info($request);
   if ($request->ajax()){
       $results = DB::table('users')->where('first_name' ,'LIKE' , $request["query"].'%' )->get();
       if(count($results) > 0){
           return response()->json($results);
       }else {
           return  response()->json(["sorry" => " no results match's"]);
       }
   }
  //  $articles = \App\Models\User::search($query)->get();

})->name('search');

require __DIR__.'/auth.php';
