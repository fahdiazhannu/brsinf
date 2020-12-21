<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Regis extends BaseController
{
    public function reg()
    {
        echo view("template/v_header");
        echo view("template/v_js");
        return view('form_regist');
    }
}