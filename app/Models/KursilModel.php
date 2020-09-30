<?php

namespace App\Models;

use CodeIgniter\Model;

class KursilModel extends Model
{
    protected $table = 'kursil_modul';

    public function getUsers($tahun = ['2020'], $jeniskursil = ['MODUL MANAJEMEN RISIKO'])
    {
        if ($tahun) {
            $this->builder()->whereIn('TAHUN_KEGIATAN', $tahun);
        }
        if ($jeniskursil) {
            $this->builder()->whereIn('JUDUL_KURSIL_MODUL', $jeniskursil);
        }
        return $this->findAll();
    }
    public function judulKursilModul()
    {
        return $this->builder()->distinct()->select('JUDUL_KURSIL_MODUL')->get()->getResultArray();
    }
}
