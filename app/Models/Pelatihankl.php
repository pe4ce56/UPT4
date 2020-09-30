<?php

namespace App\Models;

use CodeIgniter\Model;

class Pelatihankl extends Model
{
    protected $table = 'tb_data_2018';
    protected $primaryKey = 'NO';
    public function getUsers()
    {
        return $this->findAll();
    }
    public function getData($tahun = ['2020'], $kabkota = [], $jenis_usaha = [])
    {
        if ($tahun) {
            $this->builder()->whereIn('TAHUN_PELATIHAN', $tahun);
        }
        if ($jenis_usaha) {
            $this->builder()->whereIn('JENIS_USAHA_KOPERASI', $jenis_usaha);
        }
        if ($kabkota) {
            $this->builder()->whereIn('KAB_KOTA_PELATIHAN', $kabkota);
        }
        return $this->findAll();
    }



    public function JENIS_USAHA_KOPERASI()
    {
        return $this->builder()->distinct()->select('JENIS_USAHA_KOPERASI')->get()->getResultArray();
    }
    public function KAB_KOTA_PELATIHAN()
    {
        return $this->builder()->distinct()->select('KAB_KOTA_PELATIHAN')->get()->getResultArray();
    }
}
