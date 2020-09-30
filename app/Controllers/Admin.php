<?php namespace App\Controllers;
use App\Models\AnalisisModel;
use App\Models\SdmModel;
class Admin extends BaseController
{
	public function index()
	{
		//proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
		//End
		$data=[
			'title' => 'Home',
			'isi' => 'v_home2'
		];
		echo view('layout/v_wrapper', $data);
	}
	public function sdmadmin()
	{
		//proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
		//End
        $users = new SdmModel();
        $data = $users->getUsers();
		return view('datasdm/admin/v_datasdm', compact('data'));
	}
}
