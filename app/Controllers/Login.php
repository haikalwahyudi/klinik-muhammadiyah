<?php

namespace App\Controllers;

use App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }
}
