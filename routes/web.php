<?php

use Illuminate\Support\Facades\Route;

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


require __DIR__.'/auth.php';
