<?php namespace App\Models;
use CodeIgniter\Model;

class SertifikatKursil extends Model
{
    protected $table = 'sertifikat_kursil';

    public function getUsers()
    {
        return $this->findAll();
    }
}