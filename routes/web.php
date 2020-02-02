<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'],function () {
    Route::get('dashboard', function () {
        return view('admin.dashboards.dashboard');
    })->name('dashboard');
    
    Route::get('about', function () {
        return view('admin.dashboards.about');
    })->name('about');
    
    Route::get('contact', function () {
        return view('admin.dashboards.contact');
    })->name('contact');

    Route::get('settings', function () {
        return view('admin.dashboards.settings');
    })->name('settings');

    Route::resource('criteria', 'AdminControllers\CriterionController');
});

Route::get('test', function (){
    return redirect('/');
})->name('test');