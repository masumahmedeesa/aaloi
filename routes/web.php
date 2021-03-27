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

// Route::get('/', function () {
//    return view('welcome');
// });

Route::get('/', function () {
   return view('index');
});
Route::get('/about', function () {
    return view('homes.about');
});
Route::get('/services', function () {
    return view('homes.services');
});


Route::resource('farms','FarmsController');
Route::resource('projects','ProjectsController');
Route::resource('teams','TeamsController');
Route::resource('comments','CommentsController');


Auth::routes();
// Route::get('/', 'HomeController@mainPage')->name('mainPage');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/userComments','CommentsController@userIndex')->name('userIndex');
Route::get('/userComments/{farmId}/{id}','CommentsController@userReplies');


// Route::get('/main', 'HomeController@mainPage')->name('mainPage');
// Route::get('/about', 'HomeController@aboutPage')->name('about');
// Route::get('/services', 'HomeController@servicesPage')->name('services');
// Route::get('/projects', 'HomeController@projectsPage')->name('projects');

// Route::get('/farmslist', 'HomeController@farmsList')->name('farmsList');
// Route::get('/farm', 'HomeController@farm')->name('farmIndividual');

Route::get('/users/logout','Auth\LoginController@userLogout')->name('users.logout');


Route::prefix('farmNo')->group(function(){
    Route::get('/{id}/addProjects','FarmsController@addProject');
    Route::get('/{id}/addTeams','FarmsController@addTeams');
});

Route::prefix('masquerade-park')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showAdminLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

    //other tasks
    Route::get('/addfarms', 'AdminController@addFarms')->name('admin.addfarms');
    // Route::post('/addfarms','AdminController@postFarms')->name('admin.addfarms.post');


    //password resets
    Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

    Route::post('/password/reset','Auth\AdminResetPasswordController@reset')->name('admin.password.update');
    Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});

Route::prefix('whoOwnsFarm')->group(function(){
    Route::get('/login','Auth\OwnerLoginController@showOwnerLoginForm')->name('owner.login');
    Route::post('/login','Auth\OwnerLoginController@login')->name('owner.login.submit');
    Route::get('/', 'OwnerController@index')->name('owner.dashboard');
    Route::get('/logout','Auth\OwnerLoginController@logout')->name('owner.logout');

    Route::get('/comments/{id}','CommentsController@ownerIndex')->name('owner.index');
    Route::get('/replies/{farmId}/{id}', 'CommentsController@showReplies');
    Route::post('/sendReplies','CommentsController@sendReplies')->name('owner.sendReplies');

    //password resets
    Route::post('/password/email','Auth\OwnerForgotPasswordController@sendResetLinkEmail')->name('owner.password.email');
    Route::get('/password/reset','Auth\OwnerForgotPasswordController@showLinkRequestForm')->name('owner.password.request');

    Route::post('/password/reset','Auth\OwnerResetPasswordController@reset')->name('owner.password.update');
    Route::get('/password/reset/{token}','Auth\OwnerResetPasswordController@showResetForm')->name('owner.password.reset');
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
