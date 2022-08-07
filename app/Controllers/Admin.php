<?php

namespace App\Controllers;

use App\Models\M_dokter;
use App\Models\M_pasien;
use App\Models\M_user;
use App\Models\M_review;
use App\Models\M_berita;
use App\Models\M_daftar;

class Admin extends BaseController
{
    protected $M_pasien;
    protected $M_dokter;
    protected $M_review;
    protected $M_user;
    protected $M_daftar;
    protected $M_berita;
    public function __construct()
    {
        $this->M_dokter = new M_dokter();
        $this->M_pasien = new M_pasien();
        $this->M_berita = new M_berita();
        $this->M_user = new M_user();
        $this->M_review = new M_review();
        $this->M_daftar = new M_daftar();
    }
    public function index()
    {
        $ddokter = $this->M_dokter->ambilData();
        $ddaftar = $this->M_daftar->ambilData();
        $psnbulanini = $this->M_daftar->pasienBulanini();
        $pnsharian = $this->M_daftar->pasienHarian();

        // dd($pnsharian);

        $ddktr = 0;
        $dpsn = 0;
        $pbi = 0;
        $phi = 0;

        foreach ($ddokter as $d) {
            $ddktr++;
        }
        foreach ($ddaftar as $psn) {
            $dpsn++;
        }
        foreach ($psnbulanini as $blnini) {
            $pbi++;
        }
        foreach ($pnsharian as $hrini) {
            $phi++;
        }

        $data = [
            'ddokter' => $ddktr,
            'dpsn' => $dpsn,
            'blnini' => $pbi,
            'phi' => $phi,
        ];
        return view('admin/v_branda', $data);
    }
    public function ddokter()
    {
        $data   = [
            'data'  => $this->M_dokter->ambilData()
        ];
        return view('admin/v_ddokter', $data);
    }
    public function profile()
    {
        $data = [
            'data'  => $this->M_user->ambilData(session()->get('id'))->getRow()
        ];
        return view('/profile/v_profile', $data);
    }
    public function uprofile()
    {
        $id = $this->request->getVar('id');
        $gambar = $this->request->getFile('foto');

        if ($gambar->getError() === 4) {
            $Gambar_lama = $this->request->getVar('old_foto');
            $namagambar = $Gambar_lama;
        } else {
            $namagambar = $gambar->getRandomName();
            $gambar->move('img/', $namagambar);
            if($this->request->getVar('old_foto') !== 'default.png'){
            unlink('img/' . $this->request->getVar('old_foto'));
            }
        }

        $this->M_user->ubah([
            'nm_user'       => $this->request->getVar('nama'),
            'email'         => $this->request->getVar('email'),
            'nohp'    => $this->request->getVar('nohp'),
            'email'           => $this->request->getVar('email'),
            'password'            => $this->request->getVar('password'),
            'foto'              => $namagambar,
        ], $id);

        session()->setFlashdata('ubah', 'Data berhasil diubah');
        return redirect()->to('/Admin/profile');
    }
    public function dokter()
    {
        $data = [
            'data'  => $this->M_dokter->ambilData()
        ];
        return view('/lainnya/v_dokter', $data);
    }
    public function review()
    {
        $data = [
            'review'  => $this->M_review->ambilData()
        ];
        return view('/lainnya/v_review', $data);
    }
    public function blog()
    {
        $data = [
            'dberita'  => $this->M_berita->ambilData()
        ];
        return view('/lainnya/v_blog', $data);
    }
    public function detail($id)
    {
        $data = [
            'dberita'  => $this->M_berita->ambilData($id)->getRow()
        ];
        return view('/lainnya/v_detailberita', $data);
    }
}
