<?php
namespace Admin;

use View;
use BaseController;

class UserController extends BaseController {

    /*
     * Handle basic admin functionality
    */

    public function index()
    {
        return View::make('admin/user');
    }

    public function create()
    {
        return View::make('admin/add-user');
    }

}