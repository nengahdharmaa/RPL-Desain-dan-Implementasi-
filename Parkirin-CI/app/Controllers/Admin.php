<?php

namespace App\Controllers;

use App\Models\parkirPegawai_model;
use App\Models\parkirPengunjung_model;

class Admin extends BaseController
{
    // inisialisasi model
    protected $parkirPegawaiModel;
    protected $parkirPengunjungModel;
    public function __construct()
    {
        $this->parkirPegawaiModel = new parkirPegawai_model();
        $this->parkirPengunjungModel = new parkirPengunjung_model();
    }

    public function index()
    {
        $data['Pegawai'] =  $this->parkirPegawaiModel->findall();
        $data['Pengunjung'] =  $this->parkirPengunjungModel->findall();
        return view('pages/admin_pengunjung', $data);
    }

    public function changeCat()
    {
        $cat = $this->request->getVar('tp');
        $data['Pegawai'] =  $this->parkirPegawaiModel->findall();
        $data['Pengunjung'] =  $this->parkirPengunjungModel->findall();
        if ($cat == "1") {
            $data['tipe'] = "1";
            return view('pages/admin_pegawai', $data);
        } else {
            $data['tipe'] = "0";
            return view('pages/admin_pengunjung', $data);
        }
    }
}
