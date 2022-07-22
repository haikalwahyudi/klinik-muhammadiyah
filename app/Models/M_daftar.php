<?php

namespace App\Models;

use CodeIgniter\Model;

class M_daftar extends Model
{
    protected $table = "pendaftaran";

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

    public function antrian()
    {
        return $this->db->table($this->table)
            ->join('poli', 'poli.id_poli = pendaftaran.id_poli')
            ->join('user', 'user.id_user=pendaftaran.id_user')
            ->where(['pendaftaran.id_user' => session()->get('id')])->get()->getResult();
    }
    public function cariId($id)
    {
        return $this->db->table($this->table)
            ->join('user', 'user.id_user=pendaftaran.id_user')
            ->join('poli', 'poli.id_poli=pendaftaran.id_poli')
            ->where(['id_pendaftaran' => $id]);
    }
}
