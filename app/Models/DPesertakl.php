<?php namespace App\Models;
use CodeIgniter\Model;

class DPesertakl extends Model
{
    protected $table = 'diagram_peserta';

    public function getUsers()
    {
        return $this->findAll();
    }
}