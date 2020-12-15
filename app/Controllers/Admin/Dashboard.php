<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MatkulModel;

class Dashboard extends BaseController
{
    public function index()
    {
        helper('text');
        $session = session();
        echo view("template/v_header");
        echo view("template/v_sidebar");
        echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");

        $model = new MatkulModel();
        
        //load seluruh data
        $data['matakuliah'] = $model->orderBy('id', 'DESC')->find([2,3,4]);
        return view("welcome_message", $data);
    }
}
