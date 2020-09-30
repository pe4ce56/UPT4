<?php namespace App\Models;
use CodeIgniter\Model;

class DPelatihandr extends Model
{
    protected $table = 'diagram_pelatihan_daring';

    public function getUsers()
    {
        return $this->findAll();
    }
}