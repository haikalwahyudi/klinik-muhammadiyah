<?php
namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $table = "user";

    public function ambilData($id_user = false)
    {
        if($id_user === false){
            return $this->db->table($this->table)->get()->getResult();
        }else{
            return $this->getWhere(['id_user' => $id_user]);
        }
    }
    public function simpan($data)
    {
    $simpan = $this->db->table($this->table);
    return $simpan->insert($data);
    }
    public function hapus($id_user)
    {
    $hapus = $this->db->table($this->table);
    return $hapus->delete(['id_user' => $id_user]);
    }
    public function ubah($data,$id_user)
    {
    $ubah = $this->db->table($this->table);
    $ubah->where(['id_user' => $id_user]);
    return $ubah->update($data);
    }
}