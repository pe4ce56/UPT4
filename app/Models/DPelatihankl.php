<?php namespace App\Models;
use CodeIgniter\Model;

class DPelatihankl extends Model
{
    protected $table = 'diagram_pelatihan';

    public function getUsers()
    {
        return $this->findAll();
    }
}