<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Calc extends BaseController
{
    public function index()
    {
        echo view("template/v_header");
        echo view("template/v_js");
        echo view("template/v_css");
        echo view("template/v_sidebar");
        echo view("template/v_topbar");
        return view('calculator');
    }
    public function hitung()
    {
        $session = session();
        $bil1 = (float)$this->request->getVar('bil1');
        $bil2 = (float)$this->request->getVar('bil2');
        $bil3 = (float)$this->request->getVar('bil3');
        $bil4 = (float)$this->request->getVar('bil4');
        $bil5 = (float)$this->request->getVar('bil5');
        $bil6 = (float)$this->request->getVar('bil6');
        $bil7 = (float)$this->request->getVar('bil7');
        $bil8 = (float)$this->request->getVar('bil8');
        
        $totbil = $bil1+$bil2+$bil3+$bil4+$bil5+$bil6+$bil7+$bil8;
        $ipk = $totbil/8;
        $session->setFlashdata('msg', 'Total IPK : '.$ipk);
        return redirect()->to('index');
    }
}