<?php namespace App\Models;
use CodeIgniter\Model;

class SertifikatWebinar extends Model
{
    protected $table = 'sertifikat_webinar';
    protected $useTimestamps = true;
    protected $allowedFields = ['No','Nama','Bidang_Sertifikat','Instansi_Kop_UKM','No_Sertifikat','gambar'];

    public function getUsers()
    {
        return $this->findAll();
    }
    public function tambahdata($data)
    {
        $query = $this->db->table('sertifikat_webinar')->insert($data);
        return $query;
    }
    public function getData($id)
    {
        return $this->db->table('sertifikat_webinar')->where('No',$id)->get()->getRowArray();
    }
    public function ubah($data, $id)
    {
        return $this->db->table('sertifikat_webinar')->update($data, array('No' => $id));
    }
    public function hapus($id)
    {
        return $this->db->table('sertifikat_webinar')->delete(array('No' => $id));
    } 
}