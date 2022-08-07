<?php

namespace App\Controllers;

use App\Models\M_user;
use App\Models\M_daftar;
use App\Models\M_poli;
use App\Models\M_pasien;

class Daftar extends BaseController
{
    protected $M_daftar;
    protected $M_pasien;
    protected $M_poli;
    protected $M_user;

    public function __construct()
    {
        $this->M_daftar = new M_daftar;
        $this->M_poli = new M_poli;
        $this->M_user = new M_user;
        $this->M_pasien = new M_pasien;
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
            'foto'      => 'default.png',
        ]);
        session()->setFlashdata('simpan', 'Data Pengguna berhasil dibuat');
        return redirect()->to('/Daftar');
    }
    public function dpoli()
    {
        $data = [
            'data' => $this->M_poli->ambilData()
        ];
        return view('/daftar/v_daftarpoli', $data);
    }

    public function daftarPoliAksi()
    {
        $tgl = $this->request->getVar('tgl_kunjungan');
        $poli = $this->request->getVar('id_poli');
        $db = \Config\Database::connect();

        $antri = $db->query("select max(no_antrian) as max from pendaftaran where id_poli='$poli' and tgl_kunjungan='$tgl'")->getRowArray();
        // dd($antri['max']);
        $no_antrian = 1;
        if ($antri['max']) {
            $no_antrian = $antri['max'] + 1;
        }

        $this->M_daftar->simpan([
            'nm_pendaftar'      => $this->request->getVar('nama'),
            'id_user'      => session()->get('id'),
            'no_antrian'      => $no_antrian,
            'jk'      => $this->request->getVar('jk'),
            'nohp'      => $this->request->getVar('nohp'),
            'keluhan'      => $this->request->getVar('keluhan'),
            'tgl_kunjungan'      => $this->request->getVar('tgl_kunjungan'),
            'tgl_pendaftaran'      => date('Y-m-d', time() + (60 * 60 * 14)),
            'id_poli'      => $this->request->getVar('id_poli'),
            'kategori'      => $this->request->getVar('kategori'),
            'pembayaran'      => $this->request->getVar('pembayaran'),
        ]);

        $this->M_pasien->simpan([
            'nm_pasien'     => $this->request->getVar('nama'),
            'nohp'      => $this->request->getVar('nohp'),
            'jk'      => $this->request->getVar('jk'),
            'keluhan'      => $this->request->getVar('keluhan'),
            'foto'      => 'default.png',
        ]);

        session()->setFlashdata('simpan', 'Berhasil');
        return redirect()->to('/Daftar/dpoli');
    }
}
