<?php

namespace App\Controllers;

use App\Models\M_poli;

class Poli extends BaseController
{
    protected $M_poli;

    public function __construct()
    {
        $this->M_poli = new M_poli;
    }
    public function dpoli()
    {
        $data = [
            'data'  => $this->M_poli->ambilData()
        ];
        return view('poli/v_dpoli', $data);
    }
    public function tpoli()
    {
        return view('poli/v_tpoli');
    }
    public function tpoliAksi()
    {
        $this->M_poli->simpan([
            'nm_poli'   => $this->request->getVar('poli'),
            'desk_poli' => $this->request->getVar('deskripsi'),
        ]);
        session()->setFlashdata('simpan','Data poli berhasil disimpan');
        return redirect()->to('/Poli/tpoli');
    }
    public function hpoli($id_poli)
    {
        $this->M_poli->hapus($id_poli);
        session()->setFlashdata('hapus','Data poli berhasil hapus');
        return redirect()->to('/Poli/dpoli');
    }
    public function upoli($id_poli)
    {
        $data = [
            'data'  => $this->M_poli->ambilData($id_poli)->getRowArray()   
        ];
        return view('poli/v_upoli', $data);
    }
    public function upoliAksi()
    {
        $id_poli = $this->request->getVar('id_poli');
        $this->M_poli->ubah([
            'nm_poli'     => $this->request->getVar('poli'),
            'desk_poli'   => $this->request->getVar('deskripsi'),
        ],$id_poli);
        session()->setFlashdata('ubah','Data poli berhasil diubah');
        return redirect()->to('/Poli/dpoli');
    }
}