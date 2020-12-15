<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		//echo "Ini adalah Controller HOME";
		return view('login_index');
	}


	//--------------------------------------------------------------------
	public function dashboard($id, $nama)
	{
		$data = [
			'title' => 'Halaman Dashboard', 'id' => $id,
			'nama' => $nama
		];
		return view('home_dashboard', $data);
	}
}
