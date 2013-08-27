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
    // Create a controller to handle login check

    //Login Successful - Normal User - Proceed to /user


    //Login Successful - Admin User - Proceed to /admin




    //return View::make('loginform');
});

