<?php

namespace App\Controllers;

use App\Models\Pegawai_model;
use App\Models\Kendaraan_model;


class Pegawai extends BaseController
{
    // inisialisasi model
    public function __construct()
    {
        $this->pegawaiModel = new Pegawai_model();
        $this->kendaraanModel = new Kendaraan_model();
    }

    public function index()
    {
        $data = [];
        return view('pages/pegawai', $data);
    }

    // fungsi untuk melakukan search pada database apabila data yang diinputkan ada pada database
    public function add()
    {
        $id = $this->request->getVar('id');
        $check = $this->pegawaiModel->where('id_pegawai', $id)->first();
        if ($check != null) {
            return redirect()->to(base_url('Thanks/index'));
        } else {
            return redirect()->to(base_url('Pegawai/index'));
        }
    }
}
