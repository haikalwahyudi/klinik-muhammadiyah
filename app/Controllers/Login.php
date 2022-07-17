<?php

namespace App\Controllers;

use App\Controllers;
use App\Models\M_login;

class Login extends BaseController
{
    protected $M_login;

    public function __construct()
    {
        $this->M_login = new M_login();
    }
    public function index()
    {
        return view('v_login');
    }
    public function cekLogin()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $cek = $this->M_login->cariData($email);
        // dd($cek);
        if ($cek != null) {
            if ($cek['level'] == 'Admin' || $cek['level'] == 'Dokter' || $cek['level'] == 'Pimpinan') {
                $data_ses = [
                    'nama'      => $cek['nm_user'],
                    'level'     => $cek['level'],
                    'foto'      => $cek['foto'],
                    'id'        => $cek['id_user'],
                    'id_dokter' => $cek['id_dokter'],
                    'log_in'    => true
                ];
                if ($cek['password'] == $password) {
                    session()->set($data_ses);
                    return redirect()->to('/admin');
                } else {
                    session()->setFlashdata('salah', 'Password anda salah');
                    return redirect()->to('/login');
                }
            } else {
                $data_ses = [
                    'nama'      => $cek['nm_user'],
                    'level'     => $cek['level'],
                    'foto'      => $cek['foto'],
                    'id'        => $cek['id_user'],
                    'log_in'    => true
                ];
                if ($cek['password'] == $password) {
                    session()->set($data_ses);
                    return redirect()->to('/Home');
                } else {
                    session()->setFlashdata('salah', 'Password anda salah');
                    return redirect()->to('/login');
                }
            }
        } else {
            session()->setFlashdata('salah', 'Email anda tidak valid');
            return redirect()->to('/login');
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
