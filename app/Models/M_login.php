<?php

namespace App\Models;

use CodeIgniter\Model;

class M_login extends Model
{
    protected $table = 'user';
    public function cariData($email)
    {
        return $this->db->table($this->table)->where(['email' => $email])->get()->getRowArray();
    }
}
