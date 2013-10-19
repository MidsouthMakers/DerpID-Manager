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
Route::get('admin', function()
{
    return View::make('admin');
});
Route::get('user', function()
{
    return View::make('user');
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
    /* this stuff needs to move to a controller */
    function SecureThis($pin){
        $salt = '$1$' . substr(microtime(),0,8);
        return crypt($pin, $salt);
    }
    function CheckThis($pin,$salt){
        $this_salt = '$1$' . $salt;
        return crypt($pin,$this_salt);
    }
    function ParseHash($hash){
        $hash_parts = explode('$',$hash);
        return $hash_parts;
    }
    /* this stuff needs to move to a controller */
    $stored = explode('$',$user->hash);
    $supplied_check = CheckThis($data['pin'], $stored['2']);
    $supplied = explode('$',$supplied_check);
    $user_hash = $stored['3'];
    $supplied_hash = $supplied['3'];

    if((($supplied_hash == $user_hash) && $user->isAdmin)){
        //user authenticated
        setcookie("logged_in", 1, time()+3600);  /* expires in 1 hour */
        $_SESSION['logged_in'] = 1;
        $_SESSION['ircName'] = $user->ircName;
        $_SESSION['key'] = $user->key;
        echo 'User Authenticated and is an Admin';
        return Redirect::to('admin');
    } elseif((($supplied_hash == $user_hash) && !$user->isAdmin)){
        //user authenticated - but not admin
        setcookie("logged_in", 1, time()+3600);  /* expires in 1 hour */
        $_SESSION['logged_in'] = 1;
        $_SESSION['ircName'] = $user->ircName;
        $_SESSION['key'] = $user->key;
        echo 'User Authenticated and is a User';
        //Login Successful - Normal User - Proceed to /user
        return Redirect::to('user');
    } else {
        //login failed
        echo 'Invalid Login';
        //return Redirect::to('login');
    }



    //Login Successful - Admin User - Proceed to /admin




    //return View::make('loginform');
});

