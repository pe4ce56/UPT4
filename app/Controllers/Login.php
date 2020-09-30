<?php namespace App\Controllers;
use App\Models\LoginModel;
use App\Models\Home;
class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
    }

    public function index()
    {
        $data=[
			'isi' => 'v_login'
		];
		echo view('layout/v_wrapper2', $data);
    }

    public function cek_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        $cek = $this->LoginModel->cek_login($username, $password);

        if (($cek['username']=='user') && ($cek['password']=='user')) {
            //jika username dan password benar
            session()->set('username',$cek['username']);
            session()->set('nama',$cek['nama']);
            session()->set('level',$cek['level']);
            session()->setFlashdata('status', true);
            return redirect()->to(base_url('home'));
        }elseif (($cek['username']=='admin') && ($cek['password']=='admin')) {
            //jika username dan password benar
            session()->set('username',$cek['username']);
            session()->set('nama',$cek['nama']);
            session()->set('level',$cek['level']);
            session()->setFlashdata('status', true);
            return redirect()->to(base_url('admin'));
        
        }else {
            //jika username dan password salah
            session()->setFlashdata('gagal','Username atau Password salah');
            return redirect()->to(base_url('login'));
        }
    }
    public function logout()
    {
        session()->remove('username');
        session()->remove('nama');
        session()->remove('username');
        session()->setFlashdata('pesan','Anda Berhasil Logout!!!');
        return redirect()->to(base_url('login'));
    }
}