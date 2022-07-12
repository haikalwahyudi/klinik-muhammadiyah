<?php

namespace App\Controllers;

use App\Models\M_dokter;

class Chat extends BaseController
{
    protected $M_dokter;

    public function __construct()
    {
        $this->M_dokter = new M_dokter;
    }
    public function index()
    {
        $data = [
            'data'      => $this->M_dokter->ambilData()
        ];
        return view('chat/v_dchat', $data);
    }
}
