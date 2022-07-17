<?php

namespace App\Models;

use CodeIgniter\Model;

class M_review extends Model
{
    protected $table = "review";

    public function ambilData()
    {
        return $this->db->table($this->table)
            ->join('user', 'user.id_user = review.id_user')->get()->getResult();
    }

    public function simpan($data)
    {
        $simpan = $this->db->table($this->table);
        return $simpan->insert($data);
    }
}
