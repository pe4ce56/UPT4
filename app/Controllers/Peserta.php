<?php namespace App\Controllers;
use App\Models\Home;
use App\Models\Pesertadr;
use App\Models\Pesertakl;
use App\Models\DPesertadr;
use App\Models\DPesertakl;
class Peserta extends BaseController
{
  // daring
	public function index()
	  {
		echo view('datapeserta/v_menu');
    }
    public function hal2dr()
	{
		echo view('datapeserta/daring/v_hal2dr');
    }
    public function datamentahdr()
	{
        $users = new Pesertadr();
        $data = $users->getUsers();
		return view('datapeserta/daring/v_datamentah', compact('data'));
    }
    public function grafisdr()
	{
    //proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
    //End
    $users = new DPesertadr();
    $data = $users->getUsers();
		return view('datapeserta/daring/v_grafis', compact('data'));
  }

  // klasikal
    public function hal2kl()
	{
		echo view('datapeserta/klasikal/v_hal2kl');
    }
    public function datamentahkl()
	{
        $users = new Pesertakl();
        $data = $users->getUsers();
		return view('datapeserta/klasikal/v_datamentah', compact('data'));
    }
    public function grafiskl()
	{
    //proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
    //End
    $users = new DPesertakl();
    $data = $users->getUsers();
		return view('datapeserta/klasikal/v_grafis', compact('data'));
  }

  
  public function admin()
  {
    echo view('datapeserta/admin/v_menu2');
  }
  // admin klasikal
  public function adminhal2kl()
	{
		echo view('datapeserta/admin/klasikal/v_hal2kl');
  }
  public function admindmkl()
	{
    //proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
    //End
      $users = new Pesertakl();
      $data = $users->getUsers();
		  return view('datapeserta/admin/klasikal/v_datamentah', compact('data'));
  }
  public function admingkl()
	{
    //proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
    //End
    $users = new DPesertakl();
    $data = $users->getUsers();
		return view('datapeserta/admin/klasikal/v_grafis', compact('data'));
  }
  public function keldatakl()
	{
    //proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
		//End
        $users = new Pesertakl();
        $data = $users->getUsers();
		return view('datapeserta/admin/klasikal/v_keldata', compact('data'));
    }
  // admin daring
  public function adminhal2dr()
	{
		echo view('datapeserta/admin/daring/v_hal2dr');
  }
  public function admindmdr()
	{
      $users = new Pesertadr();
      $data = $users->getUsers();
		  return view('datapeserta/admin/daring/v_datamentah', compact('data'));
  }
  public function admingdr()
	{
    //proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
    //End
    $users = new DPesertadr();
    $data = $users->getUsers();
		return view('datapeserta/admin/daring/v_grafis', compact('data'));
  }
  public function keldatadr()
	{
    //proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
		//End
        $users = new Pesertadr();
        $data = $users->getUsers();
		return view('datapeserta/admin/daring/v_keldata', compact('data'));
    }
}