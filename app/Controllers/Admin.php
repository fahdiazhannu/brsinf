<?php namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\MatkulModel;
use App\Models\BrsModel;

class Admin extends BaseController{
    public function index(){
        if (session()->get('logged_in')) {
        return redirect()->to(base_url('admin/list'));
    }elseif (!session()->get('logged_in')) {
        (session()->setFlashdata('msg', 'Anda tidak mempunyai akses'));
        return redirect()->to(base_url());
        # code...
    }
    }
    public function list(){
        echo view("template/v_header");
        echo view("template/v_sidebaradmin");
        echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");

        $model = new UsersModel();
         if (session()->get('logged_in')) {
            $data['user'] = $model->orderBy('nmr_induk', 'DESC')->findAll();
            return view('users_view_all', $data);
        }elseif (!session()->get('logged_in')) {
             (session()->setFlashdata('msg', 'Anda tidak mempunyai akses'));
        return redirect()->to(base_url());
    }
}
    public function matkul()
    {

        helper('text');

        echo view("template/v_header");
        echo view("template/v_sidebaradmin");
        echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");
        //echo "Ini adalah Controller HOME";
        $model = new MatkulModel();
        if (session()->get('logged_in')) {
            $data['matakuliah'] = $model->orderBy('id', 'DESC')->findAll();
            return view('info_matkul_admin', $data);
        } elseif (!session()->get('logged_in')) {
            (session()->setFlashdata('msg', 'Anda tidak mempunyai akses'));
            return redirect()->to(base_url());
    }
        //load seluruh data
        $data['matakuliah'] = $model->orderBy('id', 'DESC')->findAll();
        return view('info_matkul_admin', $data);
    }
     public function matkuledit($id = null){
        echo view("template/v_header");
        echo view("template/v_sidebaradmin");
        echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");

        $model = new MatkulModel();

        if (session()->get('logged_in')) {
           $data['matakuliah'] = $model->where('id',$id)->first();
            return view('edit_matkul', $data);
        } elseif (!session()->get('logged_in')) {
            (session()->setFlashdata('msg', 'Anda tidak mempunyai akses'));
            return redirect()->to(base_url());
    }
    $data['matakuliah'] = $model->orderBy('id', 'DESC')->findAll();
        return view('edit_matkul',$data);
    }
     public function update(){
        $model=new MatkulModel();
        $id=$this->request->getVar('id');
        $data=[
            'kode_mk'=>$this->request->getVar('kode_mk'),
            'nm_mk'=>$this->request->getVar('nm_mk'),
            'kt_mk'=>$this->request->getVar('kt_mk'),
            'sks' => $this->request->getVar('sks'),
            'info_mk' => $this->request->getVar('info_mk'),
            'keterangan' =>$this->request->getVar('keterangan')
        ];
        $save=$model->update($id,$data);

        return redirect()->to(base_url('admin/matkul'));          
    }
}