<?php
namespace App\Models;

use CodeIgniter\Model;

class M_fasilitas extends Model
{
    protected $table = "fasilitas";

    public function ambilData($id_fasilitas = false)
    {
        if($id_fasilitas === false){
            return $this->db->table($this->table)->get()->getResult();
        }else{
            return $this->getWhere(['id_fasilitas' => $id_fasilitas]);
        }
    }
    public function simpan($data)
    {
    $simpan = $this->db->table($this->table);
    return $simpan->insert($data);
    }
    public function hapus($id_fasilitas)
    {
    $hapus = $this->db->table($this->table);
    return $hapus->delete(['id_fasilitas' => $id_fasilitas]);
    }
    public function ubah($data,$id_fasilitas)
    {
    $ubah = $this->db->table($this->table);
    $ubah->where(['id_fasilitas' => $id_fasilitas]);
    return $ubah->update($data);
    }
}