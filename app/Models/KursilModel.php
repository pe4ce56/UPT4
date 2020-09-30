<?php namespace App\Models;
use CodeIgniter\Model;

class KursilModel extends Model
{
    protected $table = 'kursil_modul';

    public function getUsers()
    {
        return $this->findAll();
    }
    // public function filter()
    // {
    //     $this->db->query("select distinct JUDUL_KURSIL_MODUL from kursil_modul");
    //     return $this->get();

    // }
}