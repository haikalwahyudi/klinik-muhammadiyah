<?php

namespace App\Controllers;

use App\Models\M_jadwal;

class Jadwal extends BaseController
{
    protected $M_jadwal;

    public function __construct()
    {
        $this->M_jadwal = new M_jadwal;
    }
    public function djadwal()
    {
        $data = [
            'data'  => $this->M_jadwal->ambilData()
        ];
        return view('jadwal/v_djadwal', $data);
    }
    public function tjadwal()
    {
        return view('jadwal/v_tjadwal');
    }
    public function tjadwalAksi()
    {
        $jam1 = $this->request->getVar('jam1');
        $jam2 = $this->request->getVar('jam2');
        $this->M_jadwal->simpan([
            'jam'    => $jam1 . " - " . $jam2,
            'hari'    => $this->request->getVar('hari'),
        ]);
        session()->setFlashdata('simpan','Data jadwal berhasil disimpan');
        return redirect()->to('/Jadwal/djadwal');
    }
    public function hjadwal($id)
    {
        $this->M_jadwal->hapus($id);
        session()->setFlashdata('hapus','Data jadwal berhasil dihapus');
        return redirect()->to('/jadwal/djadwal');
    }
    public function ujadwal($id)
    {
        $data = [
            'data'  => $this->M_jadwal->ambilData($id)->getRow()
        ];
        return view('jadwal/v_ujadwal', $data);
    }

    public function ujadwalAksi()
    {
        $kd = $this->request->getVar('id');

        $jam1 = $this->request->getVar('jam1');
        $jam2 = $this->request->getVar('jam2');
        $this->M_jadwal->ubah([
            'jam'     => $jam1 . " - " . $jam2,
            'hari'    => $this->request->getVar('hari'),
        ],$kd);

        session()->setFlashdata('ubah','Data jadwal berhasil diubah');
        return redirect()->to('/jadwal/djadwal');
    }
}