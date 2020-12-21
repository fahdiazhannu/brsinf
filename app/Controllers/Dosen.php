<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MatkulModel;
use App\Models\BrsModel;

class Dosen extends BaseController
{
    public function index()
    {

        helper('text');
        echo view("template/v_header");
        echo view("template/v_sidebardosen");
        echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");
        $model = new MatkulModel();
        if (session()->get('logged_in')) {
            $data['matakuliah'] = $model->orderBy('id', 'DESC')->find([2, 3, 4]);
            return view("welcome_message_dosen", $data);
        } elseif (!session()->get('logged_in')) { 
            (session()->setFlashdata('msg', 'Anda tidak mempunyai akses'));
            return redirect()->to(base_url());
            # code...
        }
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

        if (!session()->get('logged_in')) {
            return redirect()->to(base_url());
            # code...
        }
        $datam['mahasiswa'] = $model->orderBy('id', 'DESC')->findAll();
        return view('list_brs_mahasiswa', $datam);
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
        if ($data) {
            $kodemk = $data['kode_mk'];
            $listkode['nama'] = $data['nama'];
            $listkode['id'] = $data['id'];
            $listkode['nim'] = $data['nmr_induk'];
            $listkode['matakuliah'] = explode(" , ", $kodemk);

            return view('isi_list_brs_mahasiswa', $listkode);
        }
    }
    public function deletebrs($si){
        $model = new BrsModel();

        $siex = explode("_",$si);
        $kodemk = $siex[0];
        $idmhs = $siex[1];

        $data = $model->where('id', $idmhs)->first();
        if($data){
            $kode_mk = $data['kode_mk'];
            $kode_mkex = explode(" , ",$kode_mk);
            $kode_mkexdel = array_merge(array_diff($kode_mkex, array($kodemk)));
            $kode_mkupdate = implode(" , ",$kode_mkexdel);
            
            $dataupdate = [
                'kode_mk' => $kode_mkupdate
            ];
            $save=$model->update($idmhs,$dataupdate);
            
            return redirect()->to(base_url('dosen/list'));
        }
    }
    public function verif()
    {
        $model = new BrsModel();
        $id = $this->request->getVar('id');
        $data = $model->where('id', $id)->first();
        if($data){
            $dataupdate = [
                'verifikasi' => "verified"
            ];
            $save=$model->update($id,$dataupdate);

            return redirect()->to(base_url('dosen/list'));
        }
    }

    public function brsverif($id = null)
    {
        $session = session();
        $nmrmhs = session()->get('nmr_induk');
        $verifikasi = $this->request->getVar('verifikasi');
        $model1 = new BrsModel();
        $model2 = new MatkulModel();
        $data = [
            'verifikasi' => $this->request->getVar('verifikasi'),
        ];
        $model1->save($verifikasi, $data);
        return redirect()->to(base_url('dosen/lihat'));
    }
    public function listvrf()
    {
        $session = session();
        $model = new BrsModel();
        $models = new MatkulModel();

        echo view("template/v_header");
        echo view("template/v_sidebardosen");
        echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");

        $nmrmhs = session()->get('nmr_induk');
        $data = $model->where('nmr_induk', $nmrmhs)->first();
        if ($data) {
            $kodemk = $data['kode_mk'];
            $listkode['matakuliah'] = explode(" , ", $kodemk);
            return view('list_verif', $listkode);
    
        }
    }
    }

