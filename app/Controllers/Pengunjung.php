<?php

namespace App\Controllers;

use App\Models\Pengunjung_model;
use App\Models\Kendaraan_model;


class Pengunjung extends BaseController
{
    protected $pengunjungModel;
    protected $kendaraangModel;

    public function __construct()
    {
        $this->kendaraanModel = new Kendaraan_model();
    }

    public function index()
    {
        $data = [];
        return view('pages/pengunjung', $data);
    }

    public function out()
    {
        $data = [];
        return view('pages/trmPengunjung');
    }

    // fungsi untuk melakukan search pada database apabila data yang diinputkan ada pada database
    public function add()
    {
        $data = [
            'tipe_kendaraan' => $this->request->getVar('tipe'),
            'plat_nomor'     => $this->request->getVar('plat_no')
        ];
        $this->kendaraanModel->save($data);

        return redirect()->to('/thanks/index');
    }
}
