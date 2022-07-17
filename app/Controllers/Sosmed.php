<?php

namespace App\Controllers;

use App\Models\M_sosmed;
use App\Models\M_dokter;

class Sosmed extends BaseController
{
    protected $M_sosmed;
    protected $M_dokter;

    public function __construct()
    {
        $this->M_sosmed = new M_sosmed;
        $this->M_dokter = new M_dokter;
    }
    public function dsosmed()
    {
        $data = [
            'data'  => $this->M_sosmed->ambilData()
        ];
        return view('sosmed/v_dsosmed', $data);
    }
    public function tsosmed()
    {
        $data = [
            'data'  => $this->M_dokter->ambilData()
        ];
        return view('sosmed/v_tsosmed', $data);
    }
    public function tsosmedAksi()
    {
        $this->M_sosmed->simpan([
            'id_dokter'    => $this->request->getVar('id_dokter'),
            'fb'    => $this->request->getVar('fb'),
            'ig'    => $this->request->getVar('ig'),
            'wa'    => $this->request->getVar('wa'),
            'tw'    => $this->request->getVar('tw')
        ]);
        session()->setFlashdata('simpan', 'Data jadwal berhasil disimpan');
        return redirect()->to('/Sosmed/dsosmed');
    }
    public function hsosmed($id)
    {
        $this->M_sosmed->hapus($id);
        session()->setFlashdata('hapus', 'Data jadwal berhasil dihapus');
        return redirect()->to('/Sosmed/dsosmed');
    }
    public function usosmed($id)
    {
        $data = [
            'data'  => $this->M_dokter->ambilData(),
            'sosmed'  => $this->M_sosmed->ambilData($id)->getRow()
        ];
        return view('sosmed/v_usosmed', $data);
    }

    public function usosmedAksi()
    {
        $kd = $this->request->getVar('id');
        $this->M_sosmed->ubah([
            'id_dokter'    => $this->request->getVar('id_dokter'),
            'fb'    => $this->request->getVar('fb'),
            'ig'    => $this->request->getVar('ig'),
            'wa'    => $this->request->getVar('wa'),
            'tw'    => $this->request->getVar('tw')
        ], $kd);

        session()->setFlashdata('ubah', 'Data jadwal berhasil diubah');
        return redirect()->to('/Sosmed/dsosmed');
    }
}
