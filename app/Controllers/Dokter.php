<?php

namespace App\Controllers;

use App\Models\M_dokter;

class Dokter extends BaseController
{
    protected $M_dokter;

    public function __construct()
    {
        $this->M_dokter = new M_dokter();
    }
    public function ddokter()
    {
        $data   = [
            'data'  => $this->M_dokter->ambilData()
        ];
        return view('/dokter/v_ddokter', $data);
    }
    public function detail_dokter()
    {
        return view('/dokter/v_detail_ddokter');
    }
    public function tdokter()
    {
    }
    public function udokter()
    {
    }
}
