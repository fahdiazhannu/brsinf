<?php namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MatkulModel;

class Detailinfo extends BaseController{

 public function detail($id = null)
    {

        $session = session();
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url());
            # code...
        }
        echo view("template/v_header");
        echo view("template/v_sidebardosen");
        echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");
        $model = new MatkulModel();
        $data['matakuliah'] = $model->where('id', $id)->first();

        return view('detail_info', $data);
    }
}