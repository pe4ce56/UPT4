<?php

namespace App\Controllers;

use App\Models\Home;
use App\Models\Pelatihandr;
use App\Models\DPelatihandr;
use App\Models\DPelatihankl;
use App\Models\Pelatihankl;

use CodeIgniter\API\ResponseTrait;

class Pelatihan extends BaseController
{
  use ResponseTrait;
  public function index()
  {
    echo view('datapelatihan/v_menu');
  }
  //klasikal
  public function hal2kl()
  {
    echo view('datapelatihan/klasikal/v_hal2kl');
  }
  public function datamentahkl()
  {
    $users = new Pelatihankl();
    $data = $users->getUsers();
    return view('datapelatihan/klasikal/v_datamentah', compact('data'));
  }
  public function grafiskl()
  {
    //proteksi halaman
    if (session()->get('username') == '') {
      session()->setFlashdata('gagal', 'Anda Belum Login');
      return redirect()->to(base_url('login'));
    }
    //End
    $users = new DPelatihankl();
    $data = $users->getUsers();
    return view('datapelatihan/klasikal/v_grafis', compact('data'));
  }

  //daring
  public function hal2dr()
  {
    echo view('datapelatihan/daring/v_hal2dr');
  }
  public function datamentahdr()
  {
    $users = new Pelatihandr();
    $data = $users->getUsers();
    return view('datapelatihan/daring/v_datamentah', compact('data'));
  }
  public function grafisdr()
  {
    //proteksi halaman
    if (session()->get('username') == '') {
      session()->setFlashdata('gagal', 'Anda Belum Login');
      return redirect()->to(base_url('login'));
    }
    //End
    $users = new DPelatihandr();
    $data = $users->getUsers();
    return view('datapelatihan/daring/v_grafis', compact('data'));
  }
  // admin
  public function admin()
  {
    echo view('datapelatihan/admin/v_menu');
  }
  //daring
  public function adminhal2dr()
  {
    echo view('datapelatihan/admin/daring/v_hal2dr');
  }
  public function admindmdr()
  {
    $users = new Pelatihandr();
    $data = $users->getUsers();
    return view('datapelatihan/admin/daring/v_datamentah', compact('data'));
  }
  public function admingdr()
  {
    //proteksi halaman
    if (session()->get('username') == '') {
      session()->setFlashdata('gagal', 'Anda Belum Login');
      return redirect()->to(base_url('login'));
    }
    //End
    $users = new DPelatihandr();
    $data = $users->getUsers();
    return view('datapelatihan/admin/daring/v_grafis', compact('data'));
  }
  public function keldatadr()
  {
    //proteksi halaman
    if (session()->get('username') == '') {
      session()->setFlashdata('gagal', 'Anda Belum Login');
      return redirect()->to(base_url('login'));
    }
    //End
    $users = new Pelatihandr();
    $data = $users->getUsers();
    return view('datapelatihan/admin/daring/v_keldata', compact('data'));
  }
  //end
  //klasikal
  public function adminhal2kl()
  {
    echo view('datapelatihan/admin/klasikal/v_hal2kl');
  }
  public function admindmkl()
  {
    $users = new Pelatihankl();
    $data = $users->getUsers();
    return view('datapelatihan/admin/klasikal/v_datamentah', compact('data'));
  }
  public function admingkl()
  {
    //proteksi halaman
    if (session()->get('username') == '') {
      session()->setFlashdata('gagal', 'Anda Belum Login');
      return redirect()->to(base_url('login'));
    }
    //End
    $users = new DPelatihankl();
    $data = $users->getUsers();
    return view('datapelatihan/admin/klasikal/v_grafis', compact('data'));
  }
  public function keldatakl()
  {
    //proteksi halaman
    if (session()->get('username') == '') {
      session()->setFlashdata('gagal', 'Anda Belum Login');
      return redirect()->to(base_url('login'));
    }
    //End
    $users = new Pelatihankl();
    $filter['JENIS_USAHA_KOPERASI'] = $users->JENIS_USAHA_KOPERASI();
    $filter['KAB_KOTA_PELATIHAN'] = $users->KAB_KOTA_PELATIHAN();
    return view('datapelatihan/admin/klasikal/v_keldata',  $filter);
  }
  public function deleteKlasikal($id)
  {
    $pelatihan = new Pelatihankl();
    if ($pelatihan->delete($id)) {
      session()->setFlashdata('success', true);
      session()->setFlashdata('msg', 'Data Berhasil Dihapus');
    } else {
      session()->setFlashdata('success', true);
      session()->setFlashdata('msg', 'Data Berhasil Dihapus');
    }
    return redirect()->back();
  }


  public function downloadfile()
  {
    $this->load->helper('download');
  }

  public function KlasikalData()
  {
    $datas = new Pelatihankl();
    $tahun = isset($_POST['tahun']) ? $_POST['tahun'] : [];
    $jenisusaha = isset($_POST['jenisusaha']) ? $_POST['jenisusaha'] : [];
    $kabkota = isset($_POST['kabkota']) ? $_POST['kabkota'] : [];
    $data = $datas->getData($tahun, $kabkota, $jenisusaha);
    $this->request->setHeader('Accept', 'application/json');
    return $this->respondCreated(['data' => $data]);
  }
}
