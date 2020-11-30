<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('Login_index');
	}
	public function dashboard($id,$nama)
	{
		$data = [
			'title' => 'Halaman Dashboard',
			'id' => $id,
			'nama' => $nama
		];
		return view('home_dashboard');
	}

	//--------------------------------------------------------------------

}
