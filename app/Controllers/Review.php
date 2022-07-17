<?php

namespace App\Controllers;

use App\Models\M_review;

class Review extends BaseController
{
    protected $M_review;

    public function __construct()
    {
        $this->M_review = new M_review;
    }
    public function index()
    {
        $data = [
            'data'      => $this->M_review->ambilData()
        ];
        return view('review/v_treview', $data);
    }
    public function treviewAksi()
    {
        $this->M_review->simpan([
            'id_user'       => session()->get('id'),
            'isi_review'    => $this->request->getVar('isi'),
            'rating'        => $this->request->getVar('rating'),
        ]);
        session()->getFlashdata('simpan', 'Berhasil terkirim');
        return redirect()->to('/Review');
    }
}
