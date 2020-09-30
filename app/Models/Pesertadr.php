<?php namespace App\Models;
use CodeIgniter\Model;

class Pesertadr extends Model
{

    public function getUsers()
    {
        return $this->db->table('tb_daring')->get()->getResultArray();
    }
}