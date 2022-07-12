<?php

namespace App\Controllers;

use App\Models\M_user;

class User extends BaseController
{
    protected $M_user;

    public function __construct()
    {
        $this->M_user = new M_user();
    }
    public function duser()
    {
        $data = [
            'data'      => $this->M_user->ambilData()
        ];
        return view('user/v_duser', $data);
    }
    public function tuser()
    {
        return view('user/v_tuser');
    }
    public function tuserAksi()
    {
        $gambar = $this->request->getFile('poto');
        $Rgambar    = $gambar->getRandomName();
        $gambar->move('img', $Rgambar);
        $namagambar = $gambar->getName();

        $this->M_user->simpan([
            'nm_user'   => $this->request->getVar('user'),
            'email'     => $this->request->getVar('email'),
            'nohp'      => $this->request->getVar('nohp'),
            'username'  => $this->request->getVar('username'),
            'password'  => $this->request->getVar('password'),
            'level'     => $this->request->getVar('level'),
            'foto'      => $namagambar,
        ]);
        session()->setFlashdata('simpan', 'Data User berhasil disimpan');
        return redirect()->to('/User/duser');
    }
    public function huser($id)
    {
        $gambar = $this->M_user->ambilData($id)->getRow();
        // dd($gambar);
        if ($gambar->foto != 'default.png') {
            unlink('img/' . $gambar->foto);
        }
        $this->M_user->hapus($id);
        session()->setFlashdata('hapus', 'Data berita berhasil dihapus');
        return redirect()->to('/User/duser');
    }
    public function uuser($id)
    {
        $data = [
            'data'  => $this->M_user->ambilData($id)->getRow()
        ];
        return view('user/v_uuser', $data);
    }
    public function uuserAksi()
    {
        $kd = $this->request->getVar('id');
        $cari = $this->M_user->ambilData($kd)->getRow();
        // dd($cari);
        $gambar = $this->request->getFile('foto');

        if ($gambar->getError() === 4) {
            $Gambar_lama = $this->request->getVar('old_foto');
            $namagambar = $Gambar_lama;
        } else {
            $namagambar = $gambar->getRandomName();
            $gambar->move('img/', $namagambar);
            if ($cari->foto != 'default.png') {
                unlink('img/' . $this->request->getVar('old_foto'));
            }
        }

        $this->M_user->ubah([
            'nm_user'   => $this->request->getVar('user'),
            'email'     => $this->request->getVar('email'),
            'nohp'      => $this->request->getVar('nohp'),
            'username'  => $this->request->getVar('username'),
            'password'  => $this->request->getVar('password'),
            'level'     => $this->request->getVar('level'),
            'foto'      => $namagambar,
        ], $kd);

        session()->setFlashdata('ubah', 'Data berita berhasil diubah');
        return redirect()->to('/User/duser');
    }
}
