<?php namespace App\Models;
use CodeIgniter\Model;

class SertifikatPelatihan extends Model
{
    protected $table = 'sertifikat_pelatihan';

    public function getUsers()
    {
        return $this->findAll();
    }
}