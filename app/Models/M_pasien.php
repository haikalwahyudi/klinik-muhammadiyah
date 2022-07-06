<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pasien extends Model
{
    protected $table = 'pasien';
    public function ambilData($id_pasien = false)
    {
        if ($id_pasien === false) {
            return $this->db->table($this->table)->get()->getResult();
        } else {
            return $this->getWhere(['id_pasien' => $id_pasien]);
        }
    }
    public function simpan($data)
    {
        $simpan = $this->db->table($this->table);
        return $simpan->insert($data);
    }
    public function hapus($id_pasien)
    {
        $hapus = $this->db->table($this->table);
        return $hapus->delete(['id_pasien' => $id_pasien]);
    }
    public function ubah($data, $id_pasien)
    {
        $ubah = $this->db->table($this->table);
        $ubah->where(['id_pasien' => $id_pasien]);
        return $ubah->update($data);
    }
}
