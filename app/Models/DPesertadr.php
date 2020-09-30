<?php namespace App\Models;
use CodeIgniter\Model;

class DPesertadr extends Model
{
    protected $table = 'diagram_peserta_daring';

    public function getUsers()
    {
        return $this->findAll();
    }
}