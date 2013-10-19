<?php

class AdminController extends BaseController {

    /*
     * Handle basic admin functionality
    */

    public function index()
    {
        return View::make('admin/admin');
    }

    public function create()
    {
        return View::make('admin/add-user');
    }

}