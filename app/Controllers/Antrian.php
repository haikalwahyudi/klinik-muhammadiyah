<?php

namespace App\Controllers;

use App\Models\M_daftar;

class Antrian extends BaseController
{
    protected $M_daftar;

    public function __construct()
    {
        $this->M_daftar = new M_daftar;
    }
    public function index()
    {
        $data = [
            'data'  => $this->M_daftar->antrian()
        ];
        return view('antrian/v_dantrian', $data);
    }
    public function cetak($id)
    {
        $data = [
            'data'  => $this->M_daftar->cariId($id)->get()->getRow()
        ];
        return view('antrian/v_cetakantrian', $data);
    }
}
