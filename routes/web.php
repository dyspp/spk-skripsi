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

Route::get('/recommendation/compare', 'PublicController@compareRecommendation');

Route::get('/compare', 'PublicController@compare')->name('public.compare');

Route::get('/compare/search', 'PublicController@compareSearch')->name('public.compare_search');

Route::get('/compare/item-details/{item_id}', 'PublicController@itemToCompareDetails')->name('public.compare_item_details');

Route::get('/about', 'PublicController@about')->name('public.about');

// Admin routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function () {
    Route::get('/', function() {
        return redirect(route('admin.dashboard'));
    });
    
    Route::get('/dashboard', 'AdminPanelController@dashboard')->name('admin.dashboard');
    
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

    Route::get('/add', 'UserController@add')->name('admin.add');

    Route::post('/store', 'UserController@store')->name('admin.store');

    Route::put('change-privilege/{user}', 'UserController@changePrivilege')->name('admin.change_privilege');

    Route::get('/edit-profile/{user}', 'UserController@editProfile')->name('admin.edit_profile');

    Route::put('/update-profile/{user}', 'UserController@updateProfile')->name('admin.update_profile');

    Route::get('/manage-admins', 'AdminPanelController@manageAdmins')->name('admin.manage_admins')->middleware('check.privilege');
});

Route::get('sawmethod', 'SAWMethodController@sawMethod')->name('sawmethod');

Auth::routes(['register'    => false,
                'request'   => false,
                'reset'     => false,
                'update'    => false,
                'email'     => false]);

Route::get('/home', 'HomeController@index')->name('home');
