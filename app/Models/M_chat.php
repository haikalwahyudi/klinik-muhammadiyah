<?php

namespace App\Models;

use CodeIgniter\Model;

class M_chat extends Model
{
    protected $table = "chat";

    public function ambilData()
    {
        return $this->db->table($this->table)
            // ->join('dokter', 'dokter.id_dokter = chat.id_dokter')
            // ->join('user', 'user.id_user = chat.id_user')
            ->get()->getResultArray();
    }
    public function simpan($data)
    {
        $simpan = $this->db->table($this->table);
        return $simpan->insert($data);
    }
}
