<?php namespace App\Controllers;
use App\Models\AnalisisModel;
class AnalisisData extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Analisis = new AnalisisModel();
    }
    public function index()
	{
		//proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
        //End
        $data =[
            // 'data' => $this->AnalisisModel->findAll()
            'data' => $this->Analisis->paginate(4,'data'),
            'pager' => $this->Analisis->pager
        ];
		
		return view('hasilanalisisdata/v_analisis1', $data);
    }
    //hasilanalisis data
    public function admin()
	{
		//proteksi halaman
		if (session()->get('username')=='') {
			session()->setFlashdata('gagal','Anda Belum Login');
            return redirect()->to(base_url('login'));
		}
        //End
        session();
        $data =[
            // 'data' => $this->AnalisisModel->findAll()
            'validation' => \Config\Services::validation(),
            'data' => $this->Analisis->paginate(4,'data'),
            'pager' => $this->Analisis->pager
        ];
		
		return view('hasilanalisisdata/admin/v_analisis1', $data);
    }
    public function formtambah()
    {
        $data =[
            // 'data' => $this->AnalisisModel->findAll()
            'validation' => \Config\Services::validation()
        ];
        return view('hasilanalisisdata/admin/formtambah', $data);
    }
    
	public function save()
    {
        // if($this->request->isAJAX()){

        //     //     $validation = \Config\Services::validation();

        //     //         $valid = $this->validate([
        //     //             'judul' => [
        //     //                 'rules' =>'required|is_unique[hasil_analisis.judul]',
        //     //                 'errors' => [
        //     //                     'required'=> '{field} harus diisi',
        //     //                     'is_unique'=> '{field} Sudah Ada'
        //     //                 ]
        //     //             ]
        //     //         ]);
                    
        //     //         if (!$valid) {
        //     //             $msg = [
        //     //                 'error' =>[
        //     //                     'judul' =>$validation->getError('judul')
        //     //                 ]
        //     //                 ];
        //     //                 echo json_encode($msg);
        //     // }else{
        //     //     exit('Maaf Tidak Dapat Diproses');
        //     // }
        // }
        //validasi input
        if (!$this->validate([
            'judul' => [
                        'rules' =>'required|is_unique[hasil_analisis.judul]',
                        'errors' => [
                            'required'=> 'Judul harus diisi!!!',
                            'is_unique'=> 'Judul sudah terdaftar!!!'
                        ]
                    ],
            'data_pdf' => [
                        'rules' => 'uploaded[data_pdf]',
                        'errors' => [
                            'uploaded' => 'Pilih File Terlebih Dahulu!!!'
                        ]
                    ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('formtambah')->withInput()->with('validation', $validation);
            return redirect()->to('formtambah')->withInput();
        }
        // if (!$this->validate([
        //     'judul' => [
        //         'rules' =>'required|is_unique[hasil_analisis.judul]',
        //         'errors' => [
        //             'required'=> '{field} judul harus diisi',
        //             'is_unique'=> '{field} Judul Sudah Ada'
        //         ]
        //     ],
        //     'data_pdf' => [
        //         'rules' => 'uploaded[data_pdf]|ext_in[data_pdf, pdf]',
        //         'errors' => [
        //             'uploaded' => 'Pilih File Terlebih Dahulu',
        //             'ext_in' => 'File Harus Berformat Pdf'
        //         ]
        //     ]
        // ])) {
            
        //     // return redirect()->to('admin')->withInput()->with('validation', $validation);
        //     return redirect()->to('admin')->withInput();
        //     // return redirect()->to('admin');
        // }
        // ambil pdf
        $filepdf = $this->request->getFile('data_pdf');
        //generate nama random
        $namapdf = $filepdf->getRandomName();
        // pindahkan ke folder pdf
        $filepdf->move('pdf', $namapdf);
        // ambil nama file
        // $namapdf = $filepdf->getName();

        $model = new AnalisisModel();
        $data = array(
            'judul'          => $this->request->getVar('judul'),
            'data_pdf'       => $namapdf,
            'tgl'            => $this->request->getVar('tgl'),
        );
        if ($model->tambahdata($data)) {
            session()->setFlashdata('success', true);
            session()->setFlashdata('msg', 'Data Berhasil Ditambah');
        } else {
            session()->setFlashdata('success', false);
            session()->setFlashdata('gagal', 'Data Gagal Ditambahkan');
        }
        return redirect()->to('admin');  
          
    }
    //end
    public function formubah($id)
    {
        $data =[
            // 'data' => $this->AnalisisModel->findAll()
            'validation' => \Config\Services::validation(),
            'tampil' => $this->Analisis->getData($id)
        ];
        return view('hasilanalisisdata/admin/formubah', $data);
    }
    public function edit()
    {
        $dataLama = $this->Analisis->getData($this->request->getVar('id'));
        if($dataLama['judul'] == $this->request->getVar('judul')){
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[hasil_analisis.judul]';
        }
        if (!$this->validate([
            'judul' => [
                        'rules' => $rule_judul,
                        'errors' => [
                            'required'=> 'Judul harus diisi!!!',
                            'is_unique'=> 'Judul sudah terdaftar!!!'
                        ]
                    ],
            'data_pdf' => [
                        'rules' => 'uploaded[data_pdf]',
                        'errors' => [
                            'uploaded' => 'Pilih File Terlebih Dahulu!!!'
                        ]
                    ]
        ])) {
            return redirect()->to('/UPT4/analisisdata/formubah/'.$this->request->getVar('id'))->withInput();
        }
        $model = new AnalisisModel();
        $id = $this->request->getVar('id');
         // ambil pdf
         $filepdf = $this->request->getFile('data_pdf');
        //  cek gambar ,apakah tetap gambar lama
        if($filepdf->getError() == 4){
            $namapdf = $this->request->getVar('pdfLama');
        } else {
            //generate nama random
         $namapdf = $filepdf->getRandomName();
         // pindahkan ke folder pdf
         $filepdf->move('pdf', $namapdf);
         //hapus file
         unlink('pdf/' . $this->request->getVar('pdfLama'));
         // ambil nama file
         // $namapdf = $filepdf->getName();

        }
         
        $data = array(
            'judul'          => $this->request->getVar('judul'),
            'data_pdf'       => $namapdf,
            'tgl'            => $this->request->getVar('tgl'),
        );
        if ($model->ubah($data, $id)) {
			session()->setFlashdata('success', true);
			session()->setFlashdata('msg', 'Data Berhasil Diubah');
		} else {
			session()->setFlashdata('success', false);
			session()->setFlashdata('gagal', 'Data Gagal Diubah');
		}
        return redirect()->to('/UPT4/analisisdata/admin');
    }
    public function hapus($id)
    {

        //cari gambar berdasarkan id
        $pdf = $this->Analisis->find($id);

        //hapus gambar
        unlink('pdf/' . $pdf['data_pdf']);

        // $model = new AnalisisModel();
        
        if ($this->Analisis->hapus($id)) {
			session()->setFlashdata('success', true);
			session()->setFlashdata('msg', 'Data Berhasil Dihapus');
		} else {
			session()->setFlashdata('success', false);
			session()->setFlashdata('gagal', 'Data Gagal Dihapus');
		}
    }

}