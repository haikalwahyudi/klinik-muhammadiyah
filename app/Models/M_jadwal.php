<?php
namespace App\Models;

use CodeIgniter\Model;

class M_jadwal extends Model
{
    protected $table = "jadwal";

    public function ambilData($id_jadwal = false)
    {
        if($id_jadwal === false){
            return $this->db->table($this->table)->get()->getResult();
        }else{
            return $this->getWhere(['id_jadwal' => $id_jadwal]);
        }
    }
    public function simpan($data)
    {
    $simpan = $this->db->table($this->table);
    return $simpan->insert($data);
    }
    public function hapus($id_jadwal)
    {
    $hapus = $this->db->table($this->table);
    return $hapus->delete(['id_jadwal' => $id_jadwal]);
    }
    public function ubah($data,$id_jadwal)
    {
    $ubah = $this->db->table($this->table);
    $ubah->where(['id_jadwal' => $id_jadwal]);
    return $ubah->update($data);
    }
}