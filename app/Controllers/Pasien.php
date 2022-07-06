<?php

namespace App\Controllers;

use App\Models\M_pasien;

class Pasien extends BaseController
{
    protected $M_pasien;

    public function __construct()
    {
        $this->M_pasien = new M_pasien;
    }

    public function dpasien()
    {
        $data   = [
            'data'  => $this->M_pasien->ambilData()
        ];
        return view('pasien/v_dpasien', $data);
    }
    public function detail_pasien($id)
    {
        $data = [
            'data'  => $this->M_pasien->ambilData($id)->getRow()
        ];
        return view('pasien/v_detail_pasien', $data);
    }
    public function tpasien()
    {
        return view('pasien/v_tpasien');
    }
    public function tpasienAksi()
    {
        $gambar = $this->request->getFile('foto');
        $Rgambar    = $gambar->getRandomName();
        $gambar->move('img', $Rgambar);
        $namagambar = $gambar->getName();

        $this->M_pasien->simpan([
            'nm_pasien'       => $this->request->getVar('nm_pasien'),
            'tempat_lahir'    => $this->request->getVar('tempat_lahir'),
            'tgl_lahir'       => $this->request->getVar('tgl_lahir'),
            'nohp'            => $this->request->getVar('nohp'),
            'email'           => $this->request->getVar('email'),
            'jk'              => $this->request->getVar('jk'),
            'keluhan'       => $this->request->getVar('keluhan'),
            'foto'            => $namagambar,
            'alamat'          => $this->request->getVar('alamat'),
        ]);
        session()->setFlashdata('simpan', 'Data berhasil disimpan');
        return redirect()->to('/Pasien/dpasien');
    }
    public function ubah($id)
    {
        $data   = [
            'data'  => $this->M_pasien->ambilData($id)->getRow()
        ];
        return view('pasien/v_upasien', $data);
    }
    public function upasienAksi()
    {
        $kd = $this->request->getVar('id');
        $gambar = $this->request->getFile('foto');

        if ($gambar->getError() === 4) {
            $Gambar_lama = $this->request->getVar('old_foto');
            $namagambar = $Gambar_lama;
        } else {
            $namagambar = $gambar->getRandomName();
            $gambar->move('img/', $namagambar);
            unlink('img/' . $this->request->getVar('old_foto'));
        }

        $this->M_pasien->ubah([
            'nm_pasien'       => $this->request->getVar('nm_pasien'),
            'tempat_lahir'    => $this->request->getVar('tempat_lahir'),
            'tgl_lahir'       => $this->request->getVar('tgl_lahir'),
            'nohp'            => $this->request->getVar('nohp'),
            'email'           => $this->request->getVar('email'),
            'jk'              => $this->request->getVar('jk'),
            'keluhan'       => $this->request->getVar('keluhan'),
            'foto'            => $namagambar,
            'alamat'          => $this->request->getVar('alamat'),
        ], $kd);

        session()->setFlashdata('ubah', 'Data berhasil diubah');
        return redirect()->to('/Pasien/dpasien');
    }
    public function hpasien($id)
    {
        $gambar = $this->M_pasien->ambilData($id)->getRow();
        unlink('img/' . $gambar->foto);
        $this->M_pasien->hapus($id);
        session()->setFlashdata('hapus', 'Data berhasil dihapus');
        return redirect()->to('/Pasien/dpasien');
    }
}
