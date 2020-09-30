<?php namespace App\Controllers;
use App\Models\Home;
use App\Models\Sertifikatinhouse;
use App\Models\SertifikatKursil;
use App\Models\SertifikatPelatihan;
use App\Models\SertifikatWebinar;

class Sertifikat extends BaseController
{
  public function __construct()
    {
        helper('form');
        $this->Webinar = new SertifikatWebinar();
        $this->Inhouse = new Sertifikatinhouse();
        $this->Kursil = new SertifikatKursil();
        $this->Pelatihan = new SertifikatPelatihan();
    }
	public function index()
	  {
      echo view('sertifikat/v_menu');
    }
    public function webinar()
    {
        $data = $this->Webinar->getUsers();
      return view('sertifikat/webinar/v_webinar', compact('data'));
    }
    public function inhouse()
    {
        $data = $this->Inhouse->getUsers();
      return view('sertifikat/inhouse/v_inhouse', compact('data'));
    }
    public function kursil()
    {
        $data = $this->Kursil->getUsers();
      return view('sertifikat/kursil/v_kursil', compact('data'));
    }
    public function pelatihan()
    {
        $data = $this->Pelatihan->getUsers();
      return view('sertifikat/pelatihan/v_pelatihan', compact('data'));
    }
    //admin
    public function admin()
	  {
      echo view('sertifikat/admin/v_menu');
    }
    //admin webinar
    public function adwebinar()
	  {
        $data = $this->Webinar->getUsers();
		  return view('sertifikat/admin/webinar/v_webinar', compact('data'));
    }
    public function tambahwebinar()
	  {
      $data =[
        'validation' => \Config\Services::validation()
    ];
		  return view('sertifikat/admin/webinar/formtambah' ,$data);
    }
    public function save_w()
    {
      if (!$this->validate([
        'Nama' => [
                    'rules' =>'required|is_unique[sertifikat_webinar.Nama]',
                    'errors' => [
                        'required'=> 'Nama harus diisi!!!',
                        'is_unique'=> 'Nama sudah terdaftar!!!'
                    ]
                ],
        'Bidang_Sertifikat' => [
                    'rules' =>'required',
                    'errors' => [
                        'required'=> 'Bidang Sertifikat harus diisi!!!'
                    ]
                ],
        'Instansi_Kop_UKM' => [
                    'rules' =>'required',
                    'errors' => [
                        'required'=> 'Nama Instansi/Kop/UKM harus diisi!!!'
                    ]
                ],
        'No_Sertifikat' => [
                    'rules' =>'required|is_unique[sertifikat_webinar.No_Sertifikat]',
                    'errors' => [
                        'required'=> 'Nomor Sertifikat harus diisi!!!',
                        'is_unique'=> 'Nomor Sertifikat sudah terdaftar!!!'
                    ]
                ],
        'gambar' => [
                    'rules' =>'uploaded[gambar]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                      'uploaded' => 'Pilih gambar terlebih dahulu',
                      'is_image' => 'Yang anda pilih bukan gambar',
                      'mime_in' => 'Yang anda pilih bukan gambar'
                    ]
        ]
    ])) {
        return redirect()->to('tambahwebinar')->withInput();
    }
      $filejpg = $this->request->getFile('gambar');
        //generate nama random
        $namajpg = $filejpg->getRandomName();
        // pindahkan ke folder pdf
        $filejpg->move('gambar/sertifikat_webinar', $namajpg);
        // ambil nama file
        // $namapdf = $filepdf->getName();

        $model = new SertifikatWebinar();
        $data = array(
            'Nama'                        => $this->request->getVar('Nama'),
            'Bidang_Sertifikat'           => $this->request->getVar('Bidang_Sertifikat'),
            'Instansi_Kop_UKM'            => $this->request->getVar('Instansi_Kop_UKM'),
            'No_Sertifikat'               => $this->request->getVar('No_Sertifikat'),
            'gambar'                      => $namajpg
        );
        if ($model->tambahdata($data)) {
            session()->setFlashdata('success', true);
            session()->setFlashdata('msg', 'Data Berhasil Ditambah');
        } else {
            session()->setFlashdata('success', false);
            session()->setFlashdata('gagal', 'Data Gagal Ditambahkan');
        }
        return redirect()->to('adwebinar'); 
    }
    public function ubahwebinar($id)
    {
        $data =[
            'validation' => \Config\Services::validation(),
            'tampil' => $this->Webinar->getData($id)
        ];
        return view('sertifikat/admin/webinar/formubah' ,$data);
    }
    public function edit_w()
    {
      $model = new SertifikatWebinar();
      $id = $this->request->getVar('No');
      // ambil pdf
      $file = $this->request->getFile('gambar');
      //  cek gambar ,apakah tetap gambar lama
      if($file->getError() == 4){
          $namajpg = $this->request->getVar('JPGLama');
      } else {
          //generate nama random
      $namajpg = $file->getRandomName();
      // pindahkan ke folder pdf
      $file->move('gambar/sertifikat_webinar', $namajpg);
      //hapus file
      unlink('gambar/sertifikat_webinar/' . $this->request->getVar('JPGLama'));
      // ambil nama file
      // $namapdf = $filepdf->getName();

      }
      
      $data = array(
        'Nama'                        => $this->request->getVar('Nama'),
        'Bidang_Sertifikat'           => $this->request->getVar('Bidang_Sertifikat'),
        'Instansi_Kop_UKM'            => $this->request->getVar('Instansi_Kop_UKM'),
        'No_Sertifikat'               => $this->request->getVar('No_Sertifikat'),
        'gambar'                      => $namajpg
      );
      if ($model->ubah($data, $id)) {
    session()->setFlashdata('success', true);
    session()->setFlashdata('msg', 'Data Berhasil Diubah');
  } else {
    session()->setFlashdata('success', false);
    session()->setFlashdata('gagal', 'Data Gagal Diubah');
  }
      return redirect()->to('/UPT4/sertifikat/adwebinar');
    }
    public function hapuswebinar($id)
    {
        //cari gambar berdasarkan id
        $jpg = $this->Webinar->find($id);

        //hapus gambar
        unlink('gambar/sertifikat_webinar' . $jpg['gambar']);

        // $model = new WebinarModel();
        
        if ($this->Webinar->hapus($id)) {
			session()->setFlashdata('success', true);
			session()->setFlashdata('msg', 'Data Berhasil Dihapus');
      } else {
        session()->setFlashdata('success', false);
        session()->setFlashdata('gagal', 'Data Gagal Dihapus');
      }
    }
    //end
    //Inhouse
    public function adinhouse()
    {
        $data = $this->Inhouse->getUsers();
      return view('sertifikat/admin/inhouse/v_inhouse', compact('data'));
    }
    public function tambahinhouse()
	  {
      $data =[
        'validation' => \Config\Services::validation()
    ];
		  return view('sertifikat/admin/inhouse/formtambah' ,$data);
    }
    public function save_i()
    {
      if (!$this->validate([
        'Nama' => [
                    'rules' =>'required|is_unique[sertifikat_inhouse.Nama]',
                    'errors' => [
                        'required'=> 'Nama harus diisi!!!',
                        'is_unique'=> 'Nama sudah terdaftar!!!'
                    ]
                ],
        'Bidang_Sertifikat' => [
                    'rules' =>'required',
                    'errors' => [
                        'required'=> 'Bidang Sertifikat harus diisi!!!'
                    ]
                ],
        'Instansi_Kop_UKM' => [
                    'rules' =>'required',
                    'errors' => [
                        'required'=> 'Nama Instansi/Kop/UKM harus diisi!!!'
                    ]
                ],
        'No_Sertifikat' => [
                    'rules' =>'required|is_unique[sertifikat_webinar.No_Sertifikat]',
                    'errors' => [
                        'required'=> 'Nomor Sertifikat harus diisi!!!',
                        'is_unique'=> 'Nomor Sertifikat sudah terdaftar!!!'
                    ]
                ],
        'gambar' => [
                    'rules' =>'uploaded[gambar]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                      'uploaded' => 'Pilih gambar terlebih dahulu',
                      'is_image' => 'Yang anda pilih bukan gambar',
                      'mime_in' => 'Yang anda pilih bukan gambar'
                    ]
        ]
    ])) {
        return redirect()->to('tambahinhouse')->withInput();
    }
      $filejpg = $this->request->getFile('gambar');
        //generate nama random
        $namajpg = $filejpg->getRandomName();
        // pindahkan ke folder pdf
        $filejpg->move('gambar/sertifikat_inhouse', $namajpg);
        // ambil nama file
        // $namapdf = $filepdf->getName();

        $model = new SertifikatWebinar();
        $data = array(
            'Nama'                        => $this->request->getVar('Nama'),
            'Bidang_Sertifikat'           => $this->request->getVar('Bidang_Sertifikat'),
            'Instansi_Kop_UKM'            => $this->request->getVar('Instansi_Kop_UKM'),
            'No_Sertifikat'               => $this->request->getVar('No_Sertifikat'),
            'gambar'                      => $namajpg
        );
        if ($model->tambahdata($data)) {
            session()->setFlashdata('success', true);
            session()->setFlashdata('msg', 'Data Berhasil Ditambah');
        } else {
            session()->setFlashdata('success', false);
            session()->setFlashdata('gagal', 'Data Gagal Ditambahkan');
        }
        return redirect()->to('adwebinar'); 
    }
    public function ubahinhouse($id)
    {
        $data =[
            'validation' => \Config\Services::validation(),
            'tampil' => $this->Inhouse->getData($id)
        ];
        return view('sertifikat/admin/inhouse/formubah' ,$data);
    }
    //end
    public function adkursil()
	  {
        $data = $this->Kursil->getUsers();
		  return view('sertifikat/admin/kursil/v_kursil', compact('data'));
    }
    public function adpelatihan()
    {
        $data = $this->Pelatihan->getUsers();
      return view('sertifikat/admin/pelatihan/v_pelatihan', compact('data'));
    }
}