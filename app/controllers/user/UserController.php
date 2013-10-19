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
        return View::make('user');
    }

}