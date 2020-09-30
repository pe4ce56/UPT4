<?php

namespace App\Controllers;

use App\Models\Home;
use App\Models\KursilModel;
use CodeIgniter\API\ResponseTrait;

class Kursil extends BaseController
{
	use ResponseTrait;
	public function index()
	{
		//proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login');
			return redirect()->to(base_url('login'));
		}
		//End
		echo view('kursildanmodul/v_hal2');
	}


	public function datamentah()
	{
		//proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login');
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
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login');
			return redirect()->to(base_url('login'));
		}
		//End
		$users = new KursilModel();
		$data['users'] = $users->getUsers();
		$data['filters'] = $users->judulKursilModul();
		return view('kursildanmodul/v_kelompokdata', $data);
	}
	public function data()
	{
		$users = new KursilModel();
		// $data = null;
		$tahun = isset($_POST['tahun']) ? $_POST['tahun'] : [];
		$jeniskursil = isset($_POST['jeniskursil']) ? $_POST['jeniskursil'] : [];
		$data = $users->getUsers($tahun, $jeniskursil);
		foreach ($data as $i => $row) {
			$data[$i]['NO'] = $i + 1;
		}

		$this->request->setHeader('Accept', 'application/json');
		return $this->respondCreated(['data' => $data]);
	}
	public function grafis()
	{
		//proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login');
			return redirect()->to(base_url('login'));
		}
		//End
		echo view('kursildanmodul/v_grafis');
	}
	//admin
	public function index2()
	{
		//proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login');
			return redirect()->to(base_url('login'));
		}
		//End
		echo view('kursildanmodul/admin/v_hal2');
	}
	public function datamentah2()
	{
		//proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda Belum Login');
			return redirect()->to(base_url('login'));
		}
		//End
		$users = new KursilModel();
		$data = $users->getUsers();
		return view('kursildanmodul/admin/v_datamentah', compact('data'));
	}
	//end
}
