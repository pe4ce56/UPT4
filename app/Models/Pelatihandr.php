<?php namespace App\Models;
use CodeIgniter\Model;

class Pelatihandr extends Model
{
    protected $table = 'tb_daring';

    public function getUsers()
    {
        return $this->findAll();
    } 
    
}