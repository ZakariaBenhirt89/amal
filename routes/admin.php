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
Route::get('/video', 'App\Http\Controllers\admin\VimeoController@showPage')->name('video.view');
Route::post('/video/add', 'App\Http\Controllers\admin\VimeoController@addVideo')->name('video.add');


/* START LOGIN ADMIN */

Route::get('/login/admin', 'App\Http\Controllers\admin\LoginController@showAdminLoginForm')->name('admin.login');
Route::post('/login/admin', 'App\Http\Controllers\admin\LoginController@adminLogin')->name('admin.send.login');
Route::post('/logout/admin', 'App\Http\Controllers\admin\AdminDashboardController@adminlogout')->name('logout.admin');

/* END LOGIN ADMIN */



Route::group(['middleware' => 'auth:admin'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard','App\Http\Controllers\admin\AdminDashboardController@index')->name('admin.dashboard');


        Route::group(['prefix' => 'pre_registration'], function () {
            Route::get('/','App\Http\Controllers\admin\Pre_registration_controller@index')->name('admin.pre_registration');
            Route::get('/create','App\Http\Controllers\admin\Pre_registration_controller@create')->name('admin.pre_registration.create');
            Route::post('store-pre-registration','App\Http\Controllers\admin\Pre_registration_controller@store')->name('admin.pre_registration.store');
            Route::post('/search','App\Http\Controllers\admin\Pre_registration_controller@searchStudent')->name('admin.pre_registration.search_student');

        });

        Route::group(['prefix' => 'students'], function () {
            Route::get('/','App\Http\Controllers\admin\StudensController@index')->name('admin.student');
        });

        Route::group(['prefix' => 'chiefs'], function () {
            Route::get('/','App\Http\Controllers\admin\ChiefController@index')->name('admin.chiefs.index');
            Route::get('/create','App\Http\Controllers\admin\ChiefController@create')->name('admin.chiefs.create');
            Route::post('/store-chiefs','App\Http\Controllers\admin\ChiefController@store')->name('admin.chiefs.store');

        });

        Route::group(['prefix' => 'course'], function () {
            Route::get('/','App\Http\Controllers\admin\CourseController@index')->name('admin.course.index');
           Route::get('/create','App\Http\Controllers\admin\CourseController@create')->name('admin.course.create');
            Route::post('/store/cource','App\Http\Controllers\admin\CourseController@storeCource')->name('admin.course.store');

        });

        Route::group(['prefix' => 'monitoring'], function () {
            Route::get('/create','App\Http\Controllers\admin\EvaluationController@create')->name('admin.monitoring.create');
            Route::post('/store','App\Http\Controllers\admin\EvaluationController@store')->name('admin.monitoring.store');

        });

        Route::group(['prefix' => 'interships'], function () {
            Route::get('/','App\Http\Controllers\admin\IntershipsController@index')->name('admin.interships');
            Route::get('/create','App\Http\Controllers\admin\IntershipsController@create')->name('admin.interships.create');
            Route::post('/store','App\Http\Controllers\admin\IntershipsController@store')->name('admin.interships.store');
        });
        Route::group(['prefix' => 'jobs_portal'], function () {
            Route::get('/','App\Http\Controllers\admin\JobsController@index')->name('admin.jobs_portal');
            Route::get('/create','App\Http\Controllers\admin\JobsController@create')->name('admin.jobs_portal.create');
        });


    });
});


require __DIR__.'/auth.php';



