<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MatkulModel;
use CodeIgniter\Session\Session;

class Dashboard extends BaseController
{
    public function index()
    {

        helper('text');
        echo view("template/v_header");
        echo view("template/v_sidebar");
        echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");
        $model = new MatkulModel();
        if (session()->get('logged_in')){
                $data['matakuliah'] = $model->orderBy('id', 'DESC')->find([2, 3, 4]);
                return view("welcome_message", $data);
        
        }elseif (!session()->get('logged_in')) {
            (session()->setFlashdata('msg', 'Anda tidak mempunyai akses'));
            return redirect()->to(base_url());
            # code...
        }

    }
}
