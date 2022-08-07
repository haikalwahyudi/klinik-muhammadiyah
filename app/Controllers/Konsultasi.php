<?php

namespace App\Controllers;

use App\Models\M_chat;

class Konsultasi extends BaseController
{
    protected $M_chat;

    public function __construct()
    {
        $this->M_chat = new M_chat;
    }
    public function index()
    {
        // $data = [
        //     'data'  => $this->M_chat->dataKosultasi()
        // ];
        $dt = $this->M_chat->dataKosultasi();
        $dy = 0;
        //dd($dt);
        $data['data'] = $dt;
        // if ($dy > 1) {
        //     $data['data'] = $this->M_chat->dataKosultasi()->get()->getRow();
        // }
        return view('/chat/v_dkonsultasidokter', $data);
    }

    public function pasien()
    {
        // $data = [
        //     'data'  => $this->M_chat->dataKosultasi()
        // ];
        $dt = $this->M_chat->dataKosultasipasien();
        $dy = 0;
        //dd($dt);
        $data['data'] = $dt;
        // if ($dy > 1) {
        //     $data['data'] = $this->M_chat->dataKosultasi()->get()->getRow();
        // }
        return view('/chat/v_dkonsultasipasien', $data);
    }
}
