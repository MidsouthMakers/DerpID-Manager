<?php

namespace User;

use View;
use BaseController;

class UserController extends BaseController {

    /*
     * Handle basic admin functionality
    */

    public function index()
    {
        return View::make('user/dashboard');
    }

    public function edit()
    {
        return View::make('user/edit');
    }

    public function update()
    {
        echo "update stuff";
    }

}