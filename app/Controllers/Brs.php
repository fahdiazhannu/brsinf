<?php namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\MatkulModel;
use App\Models\BrsModel;

class Brs extends BaseController{
    public function index()
    {
        echo view("template/v_header");
        echo view("template/v_sidebar");
        echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");
        if (!session()->get('logged_in')) {
            (session()->setFlashdata('msg', 'Anda tidak mempunyai akses'));
            return redirect()->to(base_url());
        }
        $model = new MatkulModel();
        $data['matakuliah'] = $model->orderBy('kode_mk', 'DESC')->findAll();
        return view('ambil_brs', $data);
    }

    public function store()
    {
        $model = new BrsModel();
        $session = session();

        if(isset($_POST['submit'])){
            if(!empty($_POST['ceklis'])) {
                // Counting number of checked checkboxes.
                $checked_count = count($_POST['ceklis']);
                echo "You have selected following ".$checked_count." option(s): <br/>";
                // Loop to store and display values of individual checked checkbox.
                $i=1;
                $select = array();
                foreach($_POST['ceklis'] as $selected[$i]) {
                    echo "<p>".$i.".".$selected[$i] ."</p>";
                    
                    $selectedarray = $selected[$i];
                    $select[] = $selectedarray;
                    $i++;
                }
                $namamhs = session()->get('nama');
                $nmrmhs = session()->get('nmr_induk');
                $ceklis = implode(" , ",$select);
                $data = [
                    'nama' => $namamhs,
                    'nmr_induk' => $nmrmhs,
                    'kode_mk' => $ceklis
                ];
                $save = $model->insert($data);

                $session->setFlashdata('msg', 'BRS Berhasil Diisi');
                return redirect()->to('list');
            }
            else{
                $session->setFlashdata('msg', 'Pilih BRS terlebih dahulu!');
                return redirect()->to('index');
            }
        }
    }
    public function list()
    {
        $session = session();
        $model = new BrsModel();
        $models = new MatkulModel();

        echo view("template/v_header");
        echo view("template/v_sidebar");
        echo view("template/v_topbar");
        echo view("template/v_js");
        echo view("template/v_css");

        if (!session()->get('logged_in')) { 
            (session()->setFlashdata('msg', 'Anda tidak mempunyai akses'));
            return redirect()->to(base_url());
            # code...
        }
        $nmrmhs = session()->get('nmr_induk');
        $vrf = session()->get('verifikasi');
        $data = $model->where('nmr_induk', $nmrmhs, $vrf)->first();
        if ($data) {
            $kodemk = $data['kode_mk'];
            $listkode['matakuliah'] = explode(" , ", $kodemk);
            return view('list_brs', $listkode);
            
        }

    }


 public function delete($id = null){
            $session = session();
            $nmrmhs = session()->get('nmr_induk');
            $model1 = new BrsModel();
            $model2 = new MatkulModel();

            $data['kode_mk'] = $model1->where('id',$id)->delete();

            return redirect()->to(base_url('brs/list'));
        }
    }
