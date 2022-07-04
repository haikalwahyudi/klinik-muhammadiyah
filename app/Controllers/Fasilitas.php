<?php

namespace App\Controllers;

use App\Models\M_fasilitas;

class Fasilitas extends BaseController
{
    protected $M_fasilitas;

    public function __construct()
    {
        $this->M_fasilitas = new M_fasilitas;
    }
    public function dfasilitas()
    {
        $data = [
            'data'  => $this->M_fasilitas->ambilData()
        ];
        return view('fasilitas/v_dfasilitas', $data);
    }
    public function tfasilitas()
    {
        return view('fasilitas/v_tfasilitas');
    }
    public function tfasilitasAksi()
    {
        $gambar = $this->request->getFile('gambar');
        $Rgambar    = $gambar->getRandomName();
        $gambar->move('img', $Rgambar);
        $namagambar = $gambar->getName();

        $this->M_fasilitas->simpan([
            'nm_fasilitas'   => $this->request->getVar('fasilitas'),
            'gbr_fasilitas' => $namagambar,
            'jml_fasilitas' => $this->request->getVar('jumlah'),
            'desk_fasilitas' => $this->request->getVar('deskripsi'),
        ]);
        session()->setFlashdata('simpan','Data fasilitas berhasil disimpan');
        return redirect()->to('/Fasilitas/dfasilitas');
    }
    public function hfasilitas($id)
    {
        $gambar = $this->M_fasilitas->ambilData($id)->getRow();
        unlink('img/'. $gambar->gbr_fasilitas);
        $this->M_fasilitas->hapus($id);
        session()->setFlashdata('hapus','Data fasilitas berhasil dihapus');
        return redirect()->to('/Fasilitas/dfasilitas');
    }
    public function ufasilitas($id)
    {
        $data = [
            'data'  => $this->M_fasilitas->ambilData($id)->getRow()
        ];
        return view('fasilitas/v_ufasilitas', $data);
    }
    public function ufasilitasAksi()
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

        $this->M_fasilitas->ubah([
            'nm_fasilitas'   => $this->request->getVar('fasilitas'),
            'gbr_fasilitas' => $namagambar,
            'jml_fasilitas' => $this->request->getVar('jumlah'),
            'desk_fasilitas' => $this->request->getVar('deskripsi'),
        ],$kd);

        session()->setFlashdata('ubah','Data fasilitas berhasil diubah');
        return redirect()->to('/Fasilitas/dfasilitas');
    }
}