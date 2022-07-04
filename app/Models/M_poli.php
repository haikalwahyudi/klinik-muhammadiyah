<?php
namespace App\Models;

use CodeIgniter\Model;

class M_poli extends Model
{
    protected $table = "poli";

    public function ambilData($id_poli = false)
    {
        if($id_poli === false){
            return $this->db->table($this->table)->get()->getResult();
        }else{
            return $this->getWhere(['id_poli' => $id_poli]);
        }
    }
    public function simpan($data)
    {
    $simpan = $this->db->table($this->table);
    return $simpan->insert($data);
    }
    public function hapus($id_poli)
    {
    $hapus = $this->db->table($this->table);
    return $hapus->delete(['id_poli' => $id_poli]);
    }
    public function ubah($data,$id_poli)
    {
    $ubah = $this->db->table($this->table);
    $ubah->where(['id_poli' => $id_poli]);
    return $ubah->update($data);
    }
}