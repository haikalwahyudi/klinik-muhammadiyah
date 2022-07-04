<?php

namespace App\Controllers;

use App\Models\M_berita;

class Berita extends BaseController
{
    protected $M_berita;

    public function __construct()
    {
        $this->M_berita = new M_berita;
    }
    public function dberita()
    {
        $data = [
            'data'  => $this->M_berita->ambilData()
        ];
        return view('berita/v_dberita', $data);
    }
    public function tberita()
    {
        return view('berita/v_tberita');
    }
    public function tberitaAksi()
    {
        $gambar = $this->request->getFile('gambar');
        $Rgambar    = $gambar->getRandomName();
        $gambar->move('img', $Rgambar);
        $namagambar = $gambar->getName();

        $this->M_berita->simpan([
            'jdl_berita'    => $this->request->getVar('judul'),
            'isi_berita'    => $this->request->getVar('isi'),
            'tgl_berita'    => $this->request->getVar('tanggal'),
            'gbr_berita'    => $namagambar,
        ]);
        session()->setFlashdata('simpan','Data berita berhasil disimpan');
        return redirect()->to('/Berita/tberita');
    }
    public function hberita($id)
    {
        $gambar = $this->M_berita->ambilData($id)->getRow();
        unlink('img/'. $gambar->gbr_berita);
        $this->M_berita->hapus($id);
        session()->setFlashdata('hapus','Data berita berhasil dihapus');
        return redirect()->to('/Berita/dberita');
    }
    public function uberita($id)
    {
        $data = [
            'data'  => $this->M_berita->ambilData($id)->getRow()
        ];
        return view('berita/v_uberita', $data);
    }

    public function uberitaAksi()
    {
        $kd = $this->request->getVar('id');
        $gambar = $this->request->getFile('gambar');

        if($gambar->getError() === 4){
            $Gambar_lama = $this->request->getVar('old_gambar');
            $namagambar = $Gambar_lama;
        }else{
            $namagambar = $gambar->getRandomName();
            $gambar->move('img/', $namagambar);
            unlink('img/'.$this->request->getVar('old_gambar'));
        }

        $this->M_berita->ubah([
            'jdl_berita'    => $this->request->getVar('judul'),
            'isi_berita'    => $this->request->getVar('isi'),
            'tgl_berita'    => $this->request->getVar('tanggal'),
            'gbr_berita'    => $namagambar,
        ],$kd);

        session()->setFlashdata('ubah','Data berita berhasil diubah');
        return redirect()->to('/Berita/dberita');
    }
}