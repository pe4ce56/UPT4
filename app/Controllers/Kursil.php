<?php namespace App\Controllers;
use App\Models\Home;
use App\Models\KursilModel;

class Kursil extends BaseController
{
    public function index()
	{
    //proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
		//End
		echo view('kursildanmodul/v_hal2');
    }
    public function datamentah()
	{
    //proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
		//End
        $users = new KursilModel();
        $data = $users->getUsers();
		return view('kursildanmodul/v_datamentah', compact('data'));
    }
    public function kelompokdata()
	{
    //proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
		//End
        $users = new KursilModel();
        $data = $users->getUsers();
		return view('kursildanmodul/v_kelompokdata', compact('data'));
    }
    public function grafis()
	{
    //proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
		//End
		echo view('kursildanmodul/v_grafis');
	}
	//admin
	public function admin()
	{
    //proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
		//End
		echo view('kursildanmodul/admin/v_hal2');
	}
	public function datamentah2()
	{
    //proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
		//End
        $users = new KursilModel();
        $data = $users->getUsers();
		return view('kursildanmodul/admin/v_datamentah', compact('data'));
    }
	//end
}
