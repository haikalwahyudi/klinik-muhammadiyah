<?php

namespace App\Controllers;

use App\Models\M_dokter;

class Admin extends BaseController
{
    protected $M_dokter;
    public function __construct()
    {
        $this->M_dokter = new M_dokter();
    }
    public function index()
    {
        return view('admin/v_branda');
    }
    public function ddokter()
    {
        $data   = [
            'data'  => $this->M_dokter->ambilData()
        ];
        return view('admin/v_ddokter', $data);
    }
    public function detail_dokter()
    {
        return view('admin/v_detail_dokter');
    }
    public function dpasien()
    {
        return view('admin/v_dpasien');
    }
    public function detail_pasien()
    {
        return view('admin/v_detail_pasien');
    }
}
