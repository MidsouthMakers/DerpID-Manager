<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('loginform');
});
Route::get('login', function()
{
    return View::make('loginform');
});

Route::filter('adminAuth', function()
{
    if (DerpAuthController::isLoggedIn() != 1 || DerpAuthController::isAdmin() != 1) {
        return Redirect::to('login');
    }
});

Route::group(['before' => 'adminAuth'], function() {
    Route::resource('admin/user', 'admin\UserController');
    Route::resource('admin', 'admin\AdminController');

});

Route::get('user', function()
{
    if (DerpAuthController::isLoggedIn()) {
        return View::make('user');
    }
});

Route::post('login', 'DerpAuthController@login');
Route::get('logout', 'DerpAuthController@logout');

