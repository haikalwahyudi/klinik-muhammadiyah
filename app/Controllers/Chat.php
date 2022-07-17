<?php

namespace App\Controllers;

use App\Models\M_dokter;
use App\Models\M_chat;
use App\Models\M_user;

class Chat extends BaseController
{
    protected $M_dokter;
    protected $M_chat;
    protected $M_user;

    public function __construct()
    {
        $this->M_dokter = new M_dokter;
        $this->M_user = new M_user;
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
            'duser'     => $this->M_user->ambilData(session()->get('id'))->getRow(),
            'chat'      => $this->M_chat->ambilData()
        ];
        return view('chat/v_chat', $data);
    }
    public function chatDokter($id)
    {
        $data = [
            'data'      => $this->M_dokter->ambilData(session()->get('id_dokter'))->getRow(),
            'duser'     => $this->M_user->ambilData($id)->getRow(),
            'chat'      => $this->M_chat->ambilData()
        ];
        return view('chat/v_chatdokter', $data);
    }
    public function chatAksiPsn()
    {
        // dd($this->request->getVar('id_dokter'));
        $this->M_chat->simpan([
            'id_dokter'     => $this->request->getVar('id_dokter'),
            'id_user'       => session()->get('id'),
            'aksi'          => '2',
            'pesan'         => $this->request->getVar('pesan')
        ]);
        return redirect()->to('Chat/chat/' . $this->request->getVar('id_dokter'));
    }
    public function chatAksiDokter()
    {
        // dd($this->request->getVar('id_dokter'));
        $this->M_chat->simpan([
            'id_dokter'     => session()->get('id_dokter'),
            'id_user'       => $this->request->getVar('id_pasien'),
            'aksi'          => '1',
            'pesan'         => $this->request->getVar('pesan')
        ]);
        return redirect()->to('Chat/chatDokter/' . $this->request->getVar('id_pasien'));
    }
}
