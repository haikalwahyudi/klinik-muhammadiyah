<?php

namespace App\Controllers;

use App\Models\M_user;

class Daftar extends BaseController
{
    protected $M_user;

    public function __construct()
    {
        $this->M_user = new M_user;
    }
    public function index()
    {
        return view('daftar/v_daftar');
    }
    public function daftarAksi()
    {
        $this->M_user->simpan([
            'nm_user'   => $this->request->getVar('nama'),
            'email'     => $this->request->getVar('email'),
            'nohp'      => $this->request->getVar('nohp'),
            'username'  => '',
            'password'  => $this->request->getVar('password'),
            'level'     => 'Pasien',
            'foto'      => 'default.jpg',
        ]);
        session()->setFlashdata('simpan', 'Data Pengguna berhasil dibuat');
        return redirect()->to('/Daftar');
    }
}
