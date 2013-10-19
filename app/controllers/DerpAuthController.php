<?php
class DerpAuthController extends BaseController {

    /*
     * Handle user authentication
     */

    public function login()
    {

        // Get and validate input
        $data = Input::all();
        $rules = array(
            'key' => 'integer',
            'pin' => 'integer'
        );
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return Redirect::to('/');
        }

        //Get user by specified key
        $user = User::getUserByKey($data['key']);

        //Find out whether hashes match
        $hashes_match = DerpAuthController::hashesMatch($user->hash, $data['pin']);

        if($hashes_match){

            Session::put('logged_in', 1);
            Session::put('ircName', $user->ircName);
            Session::put('key', $user->key);

            if($user->isAdmin){

                return Redirect::to('admin');

            } elseif(!$user->isAdmin){

                return Redirect::to('user');

            }
        } else {

            return Redirect::to('login');
        }

        //return View::make('loginform');
    }

    public function hashesMatch($user_hash, $supplied_pin)
    {
        $stored = explode('$',$user_hash);
        $salt = '$1$' . $stored['2'];
        $supplied_check = crypt($supplied_pin, $salt);
        $supplied = explode('$',$supplied_check);
        $user_hash = $stored['3'];
        $supplied_hash = $supplied['3'];

        if($supplied_hash == $user_hash) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function isLoggedIn()
    {
        if (Session::get('logged_in') == 1) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function isAdmin()
    {
        $key = Session::get('key');
        $user = User::getUserByKey($key);
        if ($user->isAdmin) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function logout()
    {
        Session::flush();

        return Redirect::to('login');
    }

}