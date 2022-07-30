<?php

namespace App\Models;

use CodeIgniter\Model;

class M_laporan extends Model
{
    protected $table = "pendaftaran";

    public function ambilData($id_pendaftaran = false)
    {
        if ($id_pendaftaran === false) {
            return $this->db->table($this->table)->get()->getResult();
        } else {
            return $this->getWhere(['id_pendaftaran' => $id_pendaftaran]);
        }
    }
    public function simpan($data)
    {
        $simpan = $this->db->table($this->table);
        return $simpan->insert($data);
    }
    public function hapus($id_pendaftaran)
    {
        $hapus = $this->db->table($this->table);
        return $hapus->delete(['id_pendaftaran' => $id_pendaftaran]);
    }
    public function ubah($data, $id_pendaftaran)
    {
        $ubah = $this->db->table($this->table);
        $ubah->where(['id_pendaftaran' => $id_pendaftaran]);
        return $ubah->update($data);
    }
}
