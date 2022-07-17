<?php

namespace App\Models;

use CodeIgniter\Model;

class M_sosmed extends Model
{
    protected $table = "sosmed";

    public function ambilData($id_sosmed = false)
    {
        if ($id_sosmed === false) {
            $this->select('sosmed.* , dokter.*');
            $this->join('dokter', 'sosmed.id_dokter=dokter.id_dokter');
            return $this->get()->getResult();
        } else {
            return $this->getWhere(['id_sosmed' => $id_sosmed]);
        }
    }
    public function simpan($data)
    {
        $simpan = $this->db->table($this->table);
        return $simpan->insert($data);
    }
    public function hapus($id_sosmed)
    {
        $hapus = $this->db->table($this->table);
        return $hapus->delete(['id_sosmed' => $id_sosmed]);
    }
    public function ubah($data, $id_sosmed)
    {
        $ubah = $this->db->table($this->table);
        $ubah->where(['id_sosmed' => $id_sosmed]);
        return $ubah->update($data);
    }
}
