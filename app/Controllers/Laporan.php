<?php

namespace App\Controllers;

use App\Models\M_daftar;
use App\Models\M_poli;

class Laporan extends BaseController
{
    protected $M_poli;
    protected $M_daftar;

    public function __construct()
    {
        $this->M_daftar = new M_daftar;
        $this->M_poli = new M_poli;
    }
    public function index()
    {
        $data = [
            'data'      => $this->M_daftar->laporan(),
            'poli'      => $this->M_poli->ambilData()
        ];
        return view('laporan/v_laporan', $data);
    }
    public function filter()
    {
        $tgl = [
            'awal'      => $this->request->getVar('tgl_awal'),
            'akhir'     => $this->request->getVar('tgl_akhir'),
        ];

        // dd($tgl);
        $data = [
            'tgl'       => $tgl,
            'filter'    => $this->M_daftar->cariData($tgl),
            'poli'      => $this->M_poli->ambilData()
        ];
        return view('/laporan/v_flaporan', $data);
    }
    public function cetak($tgl_awal = 0, $tgl_akhir = 0)
    {
        $tgl = [
            'awal'      => $tgl_awal,
            'akhir'     => $tgl_akhir
        ];

        $data =
            [
                'cetak' => $this->M_daftar->cariData($tgl),
                'tgl'   => $tgl
            ];
        // dd($data);
        return view('/laporan/v_claporan', $data);
    }
    public function cetak2()
    {
        $data =
            [
                'cetak' => $this->M_daftar->dlaporan()
            ];
        return view('/laporan/v_claporan2', $data);
    }
    public function cetakpoli($id)
    {
        $data =
            [
                'cetak' => $this->M_daftar->filterpoli($id)
            ];
        return view('/laporan/v_cpolilaporan', $data);
    }
    public function caripoli($id)
    {
        $data = [
            'cpoli' => $this->M_daftar->filterpoli($id),
            'poli'      => $this->M_poli->ambilData()
        ];
        return view('laporan/v_plaporan', $data);
    }
}
