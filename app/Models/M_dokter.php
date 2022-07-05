<?php

namespace App\Models;

use CodeIgniter\Model;

class M_dokter extends Model
{
    protected $table = "dokter";

    public function ambilData($id_dokter = false)
    {
        if ($id_dokter === false) {
            return $this->db->table($this->table)
                ->join('poli', 'poli.id_poli = dokter.id_poli')
                ->join('jadwal', 'jadwal.id_jadwal = dokter.id_jadwal')
                ->get()->getResult();
        } else {
            return $this->db->table($this->table)
                ->join('poli', 'poli.id_poli = dokter.id_poli')
                ->join('jadwal', 'jadwal.id_jadwal = dokter.id_jadwal')
                ->getWhere(['id_dokter' => $id_dokter]);
        }
    }
    public function simpan($data)
    {
        $simpan = $this->db->table($this->table);
        return $simpan->insert($data);
    }
    public function hapus($id_dokter)
    {
        $hapus = $this->db->table($this->table);
        return $hapus->delete(['id_dokter' => $id_dokter]);
    }
    public function ubah($data, $id_dokter)
    {
        $ubah = $this->db->table($this->table);
        $ubah->where(['id_dokter' => $id_dokter]);
        return $ubah->update($data);
    }
}
