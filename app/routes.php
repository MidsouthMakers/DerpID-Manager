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
Route::post('login', function()
{
    //Handle input
    $data = Input::all();
    $rules = array(
        'key' => 'integer',
        'pin' => 'integer'
    );
    // Create a new validator instance.
    $validator = Validator::make($data, $rules);
    if ($validator->fails()) {
        return Redirect::to('/');
    }
    //Data is valid Proceed to authenticate the user
    //Get this user
    $user = DB::table('users')->where('key', $data['key'])->first();

    var_dump($user);
    //Login Successful - Normal User - Proceed to /user


    //Login Successful - Admin User - Proceed to /admin




    //return View::make('loginform');
});

