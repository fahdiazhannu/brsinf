<?php namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MatkulModel;

class Matakuliah extends BaseController{
    public function index()
    {

        helper('text');

        echo view("template/v_header");
        echo view("template/v_sidebar");
        echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");
        //echo "Ini adalah Controller HOME";
        $model = new MatkulModel();
        if (session()->get('logged_in')) {
            $data['matakuliah'] = $model->orderBy('id', 'DESC')->findAll();
            return view("info_matkul", $data);
        } elseif (!session()->get('logged_in')) {
            return redirect()->to(base_url());
            # code...
        }
    }
    public function create() {
        echo view("template/v_header");
        echo view("template/v_js");
        return view('form_regist');
    }
    public function store(){
        echo view("template/v_header");
		echo view("template/v_sidebar");
		echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");
        
        $model = new MatkulModel();

        $data = [
            
        ];
        $save = $model->insert($data);

        return redirect()->to(base_url('home'));
    }
    public function edit ($kode_mk = null){

        echo view("template/v_header");
		echo view("template/v_sidebar");
		echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");
        $model = new MatkulModel();
       $data['matakuliah'] = $model->where('kode_mk', $kode_mk)->first();
    
        return view('edit_matkul', $data);
    }
        public function update(){

            $model = new MatkulModel();
            $kode_mk = $this->request->getVar('kode_mk');
            $data = [
            'kode_mk' => $this->request->getVar('kode_mk'),
            'nm_mk' => $this->request->getVar('nm_mk'),
            'sks' => $this->request->getVar('sks'),
            'semester' => $this->request->getVar('semester'),
            'keterangan' => $this->request->getVar('keterangan'),
            ];
            $save = $model->update($kode_mk, $data);
    
            return redirect()->to(base_url('admin/users'));
        }
        public function delete($id = null){
            $model = new MatkulModel();
            $data['kode_mk'] = $model->where('id',$id)->delete();

            return redirect()->to(base_url('admin/users'));
        }
 public function detail ($id = null){

        echo view("template/v_header");
		echo view("template/v_sidebar");
		echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");
        $model = new MatkulModel();

        if (session()->get('logged_in')) {
            $data['matakuliah'] = $model->where('id', $id)->first();
            return view('detail_info', $data);
        } elseif (!session()->get('logged_in')) {
            (session()->setFlashdata('msg', 'Anda tidak mempunyai akses'));
            return redirect()->to(base_url());
            # code...
        }

    }
}