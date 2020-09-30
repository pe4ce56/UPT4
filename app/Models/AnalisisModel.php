<?php namespace App\Models;
use CodeIgniter\Model;

class AnalisisModel extends Model
{
    protected $table = 'hasil_analisis';
    protected $useTimestamps = true;
    protected $allowedFields = ['id','judul','data_pdf','tgl'];

    public function tambahdata($data)
    {
        $query = $this->db->table('hasil_analisis')->insert($data);
        return $query;
    }
    // public function ubah($id)
    // {
    //     return $this->db->table('hasil_analisis')->where('id',$id)->get()->getRowArray();
        
    // }
    public function ubah($data, $id)
    {
        $query = $this->db->table('hasil_analisis')->update($data, array('id' => $id));
        return $query;
    }
    public function getData($id)
    {
        return $this->db->table('hasil_analisis')->where('id',$id)->get()->getRowArray();
    }
    public function hapus($id)
    {
        $query = $this->db->table('hasil_analisis')->delete(array('id' => $id));
        return $query;
    } 
}
?>