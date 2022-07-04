<?php
namespace App\Models;

use CodeIgniter\Model;

class M_berita extends Model
{
    protected $table = "berita";

    public function ambilData($id_berita = false)
    {
        if($id_berita === false){
            return $this->db->table($this->table)->get()->getResult();
        }else{
            return $this->getWhere(['id_berita' => $id_berita]);
        }
    }
    public function simpan($data)
    {
    $simpan = $this->db->table($this->table);
    return $simpan->insert($data);
    }
    public function hapus($id_berita)
    {
    $hapus = $this->db->table($this->table);
    return $hapus->delete(['id_berita' => $id_berita]);
    }
    public function ubah($data,$id_berita)
    {
    $ubah = $this->db->table($this->table);
    $ubah->where(['id_berita' => $id_berita]);
    return $ubah->update($data);
    }
}