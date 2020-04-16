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
// Public routes
Route::get('/', 'PublicController@index')->name('public.index');

Route::get('/catalog', 'PublicController@catalog')->name('public.catalog');

Route::get('/catalog/filter', 'PublicController@catalogFilter');

route::get('/catalog/search', 'PublicController@catalogSearch');

Route::get('/catalog/{slug}', 'PublicController@catalogItem')->name('public.catalog.item');

Route::get('/recommendation', 'PublicController@recommendation')->name('public.recommendation');

Route::get('/recommendation/sawmethod', 'SAWMethodController@sawMethod')->name('public.recommendation.saw-method');

// Admin routes
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

    Route::resource('criterionscores', 'AdminControllers\CriterionScoreController');

    Route::get('criterionscores/criterion/{criterion_id}', 'AdminControllers\CriterionScoreController@getAllScoresFor')->name('criterionscores.by_criterion');

    Route::resource('alternatives', 'AdminControllers\AlternativeController');

    Route::resource('alternativescores', 'AdminControllers\AlternativeScoreController');
});

Route::get('sawmethod', 'SAWMethodController@sawMethod')->name('sawmethod');