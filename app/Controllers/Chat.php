<?php

namespace App\Controllers;

use App\Models\M_dokter;
use App\Models\M_chat;

class Chat extends BaseController
{
    protected $M_dokter;
    protected $M_chat;

    public function __construct()
    {
        $this->M_dokter = new M_dokter;
        $this->M_chat = new M_chat;
    }
    public function index()
    {
        $data = [
            'data'      => $this->M_dokter->ambilData()
        ];
        return view('chat/v_dchat', $data);
    }
    public function chat($id)
    {
        $data = [
            'data'      => $this->M_dokter->ambilData($id)->getRow(),
            'chat'      => $this->M_chat->ambilData()
        ];
        return view('chat/v_chat', $data);
    }
    public function chatAksiPsn()
    {
        $this->M_chat->simpan([
            'id_dokter'     => $this->request->getVar('id_dokter'),
            'id_user'       => session()->get('id'),
            'aksi'          => '2',
            'pesan'         => $this->request->getVar('pesan')
        ]);
        return redirect()->to('Chat/chat/' .  $this->request->getVar('id_dokter'));
    }
}
