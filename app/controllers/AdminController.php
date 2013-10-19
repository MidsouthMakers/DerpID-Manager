<?php

class AdminController extends BaseController {

    /*
     * Handle basic admin functionality
    */

    public function __construct()
    {
        $this->beforeFilter(function()
        {
            echo "running";
            if (!DerpAuthController::isLoggedIn() || !DerpAuthController::isAdmin()) {
                Redirect::to('login');
                echo "broken";
            }
        });
    }

    public function index()
    {
        return View::make('admin');
    }

    public function create()
    {
        return View::make('admin');
    }

}