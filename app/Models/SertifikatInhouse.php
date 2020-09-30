<?php namespace App\Models;
use CodeIgniter\Model;

class SertifikatInhouse extends Model
{
    protected $table = 'sertifikat_inhouse';
    protected $useTimestamps = true;
    protected $allowedFields = ['id','Nama','Bidang_Sertifikat','Instansi_Kop_UKM','No_Sertifikat','gambar'];

    public function getUsers()
    {
        return $this->findAll();
    }
    public function tambahdata($data)
    {
        $query = $this->db->table('sertifikat_inhouse')->insert($data);
        return $query;
    }
    public function getData($id)
    {
        return $this->db->table('sertifikat_inhouse')->where('id',$id)->get()->getRowArray();
    }
}