<?php

namespace App\Controllers;

use App\Models\M_dokter;
use App\Models\M_poli;
use App\Models\M_jadwal;
use App\Models\M_user;

class Dokter extends BaseController
{
    protected $M_dokter;
    protected $M_poli;
    protected $M_user;
    protected $M_jadwal;

    public function __construct()
    {
        $this->M_dokter = new M_dokter();
        $this->M_poli = new M_poli();
        $this->M_user = new M_user();
        $this->M_jadwal = new M_jadwal();
    }
    public function ddokter()
    {
        $data   = [
            'data'  => $this->M_dokter->ambilData()
        ];
        return view('/dokter/v_ddokter', $data);
    }
    public function detail_dokter($id)
    {
        $data = [
            'data'      => $this->M_dokter->ambilData($id)->getRow(),
        ];
        return view('/dokter/v_detail_dokter', $data);
    }
    public function tdokter()
    {
        $data = [
            'poli'      => $this->M_poli->ambilData(),
            'jadwal'    => $this->M_jadwal->ambilData(),
        ];
        return view('dokter/v_tdokter', $data);
    }
    public function tdokterAksi()
    {
        $gambar = $this->request->getFile('foto');
        $Rgambar    = $gambar->getRandomName();
        $gambar->move('img', $Rgambar);
        $namagambar = $gambar->getName();

        $this->M_dokter->simpan([
            'nm_dokter'       => $this->request->getVar('nm_dokter'),
            'id_poli'         => $this->request->getVar('id_poli'),
            'tempat_lahir'    => $this->request->getVar('tempat_lahir'),
            'tgl_lahir'       => $this->request->getVar('tgl_lahir'),
            'email'           => $this->request->getVar('email'),
            'nohp'            => $this->request->getVar('nohp'),
            'jk'              => $this->request->getVar('jk'),
            'id_jadwal'       => $this->request->getVar('id_jadwal'),
            'foto'            => $namagambar,
            'alamat'          => $this->request->getVar('alamat'),
        ]);
        //mengambil id terakhir
        $id_Dokter = $this->M_dokter->insertID();
        // dd($id_Dokter);

        $this->M_user->simpan([
            'nm_user'   => $this->request->getVar('nm_dokter'),
            'email'     => $this->request->getVar('email'),
            'nohp'      => $this->request->getVar('nohp'),
            'username'  => '',
            'password'  => '1234',
            'level'     => 'Dokter',
            'foto'      => $namagambar,
            'id_dokter' => $id_Dokter,
        ]);
        session()->setFlashdata('simpan', 'Data berhasil disimpan');
        return redirect()->to('/Dokter/ddokter');
    }
    public function udokter($id)
    {
        $data = [
            'data'      => $this->M_dokter->ambilData($id)->getRow(),
            'poli'      => $this->M_poli->ambilData(),
            'jadwal'    => $this->M_jadwal->ambilData(),
        ];
        return view('dokter/v_udokter', $data);
    }
    public function udokterAksi()
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

        $this->M_dokter->ubah([
            'nm_dokter'       => $this->request->getVar('nm_dokter'),
            'id_poli'         => $this->request->getVar('id_poli'),
            'tempat_lahir'    => $this->request->getVar('tempat_lahir'),
            'tgl_lahir'       => $this->request->getVar('tgl_lahir'),
            'email'           => $this->request->getVar('email'),
            'nohp'            => $this->request->getVar('nohp'),
            'jk'              => $this->request->getVar('jk'),
            'id_jadwal'       => $this->request->getVar('id_jadwal'),
            'foto'            => $namagambar,
            'alamat'          => $this->request->getVar('alamat'),
        ], $kd);

        session()->setFlashdata('ubah', 'Data berhasil diubah');
        return redirect()->to('/Dokter/ddokter');
    }
    public function hdokter($id)
    {
        $gambar = $this->M_dokter->ambilData($id)->getRow();
        unlink('img/' . $gambar->foto);
        $this->M_dokter->hapus($id);
        session()->setFlashdata('hapus', 'Data berhasil dihapus');
        return redirect()->to('/Dokter/ddokter');
    }
}
