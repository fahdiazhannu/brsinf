<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MatkulModel;
use App\Models\BrsModel;

class Dosen extends BaseController
{
    public function index()
    {
        helper('text');
        $session = session();
        echo view("template/v_header");
        echo view("template/v_sidebardosen");
        echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");

        $model = new MatkulModel();
        
        //load seluruh data
        $data['matakuliah'] = $model->orderBy('id', 'DESC')->find([2,3,4]);
        return view("welcome_message_dosen", $data);
    }
    public function list()
    {
        $session = session();
        $model = new BrsModel();

        echo view("template/v_header");
        echo view("template/v_sidebardosen");
        echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");

        $datam['mahasiswa'] = $model->orderBy('id', 'DESC')->findAll();
        return view('list_brs_mahasiswa',$datam);
    }
    public function lihat($id = null)
    {
        $session = session();
        $model = new BrsModel();

        echo view("template/v_header");
        echo view("template/v_sidebardosen");
        echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");

        $data = $model->where('id', $id)->first();
        if($data){
            $kodemk = $data['kode_mk'];
            $listkode['matakuliah'] = explode(" , ",$kodemk);

            return view('isi_list_brs_mahasiswa',$listkode);
            
        }

    }
}
