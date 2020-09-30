<?php

namespace App\Models;

use CodeIgniter\Model;

class SdmModel extends Model
{
    public function getUsers()
    {
        return $this->db->table('tb_sdm')->get()->getResultArray();
    }

    public function getById($id)
    {
        return $this->db->table('tb_sdm')->where('NO', $id)->get()->getRowArray();
    }

    public function saveData($data)
    {
        $query = $this->db->table('tb_sdm')->insert($data);
        return $query;
    }

    public function updateData($id, $data)
    {
        $query = $this->db->table('tb_sdm')->update($data, array('NO' => $id));
        return $query;
    }

    public function deleteData($id)
    {
        $query = $this->db->table('tb_sdm')->delete(array('NO' => $id));
        return $query;
    }
}
