<?php namespace App\Controllers;
use App\Models\SdmModel;

class Sdm extends BaseController
{
	public function __construct()
	{
		$this->model = new SdmModel;
	}
	public function index()
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

	public function save() 
	{
		$model = new SdmModel();
        $data = array(
			'NAMA'			=>$this->request->getPost('NAMA'),
			'NIP_BARU'		=>$this->request->getPost('NIP_BARU'),
			'JABATAN'		=>$this->request->getPost('JABATAN'),
			'PANGKAT'		=>$this->request->getPost('PANGKAT'),
			'GOLONGAN'		=>$this->request->getPost('GOLONGAN'),
			'KELAS_JABATAN'	=>$this->request->getPost('KELAS_JABATAN'),
			'RUMPUN'		=>$this->request->getPost('RUMPUN'),
		 );
        $model->saveData($data);
        return redirect()->to('index');
	}

	public function find($id)
	{
		$model = new Sdmmodel();
		$data = $model->getById($id);
		echo json_encode($data);
	}

	public function update()
	{
		$model = new Sdmmodel();
		$id = $this->request->getPost('NO');
		$data = array(
			'NAMA'			=> $this->request->getPost('NAMA'),
			'NIP_BARU'		=> $this->request->getPost('NIP_BARU'),
			'JABATAN'		=> $this->request->getPost('JABATAN'),
			'PANGKAT'		=> $this->request->getPost('PANGKAT'),
			'GOLONGAN'		=> $this->request->getPost('GOLONGAN'),
			'KELAS_JABATAN'	=> $this->request->getPost('KELAS_JABATAN'),
			'RUMPUN'		=> $this->request->getPost('RUMPUN'),
		);
		if ($model->updateData($id, $data)) {
			session()->setFlashdata('success', true);
			session()->setFlashdata('msg', 'Data Berhasil Diubah');
		} else {
			session()->setFlashdata('success', true);
			session()->setFlashdata('msg', 'Data Berhasil Diubah');
		}
		return redirect()->to('index');
	}

	public function delete()
	{
		$model = new SdmModel();
		$id = $this->request->getPost('NO');
		if ($model->deleteData($id)) {
			session()->setFlashdata('success', true);
			session()->setFlashdata('msg', 'Data Berhasil Dihapus');
		} else {
			session()->setFlashdata('success', true);
			session()->setFlashdata('msg', 'Data Berhasil Dihapus');
		}
		return redirect()->to('index');
	}
		
} 
