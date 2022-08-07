<?php

namespace App\Models;

use CodeIgniter\Model;

class M_chat extends Model
{
    protected $table = "chat";

    public function ambilData()
    {
        return $this->db->table($this->table)
            // ->join('dokter', 'dokter.id_dokter = chat.id_dokter')
            // ->join('user', 'user.id_user = chat.id_user')
            ->get()->getResultArray();
    }
    public function cari($id)
    {
        return $this->db->table($this->table)
            ->join('dokter', 'dokter.id_dokter = chat.tujuan')
            ->join('user', 'user.id_user = chat.id_user')
            ->where(['chat.tujuan' => $id])
            ->get()->getResultArray();
    }
    public function laporanchat()
    {
        return $this->db->table($this->table)
            ->join('dokter', 'dokter.id_dokter = chat.tujuan')
            ->join('user', 'user.id_user = chat.id_user')
            ->get()->getResultArray();
    }
    public function simpan($data)
    {
        $simpan = $this->db->table($this->table);
        return $simpan->insert($data);
    }
    public function dataKosultasi()
    {
        // $this->select('chat.*');
        // $this->where(['id_user' => session()->get('id')]);
        // return $this->get()->getResultArray();
        $id = session()->get('id');
        $data = $this->db->query("select distinct id_user from chat where tujuan='$id'");
        return $data->getResultArray();
    }

    public function dataKosultasipasien()
    {
        // $this->select('chat.*');
        // $this->where(['id_user' => session()->get('id')]);
        // return $this->get()->getResultArray();
        $id = session()->get('id');
        $data = $this->db->query("select distinct tujuan from chat where id_user='$id'");
        return $data->getResultArray();
    }
}
