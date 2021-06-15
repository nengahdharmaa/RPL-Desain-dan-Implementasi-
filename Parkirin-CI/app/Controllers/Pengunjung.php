<?php

namespace App\Controllers;

use App\Models\parkirPengunjung_model;

class Pengunjung extends BaseController
{
    protected $parkirPengunjungModel;
    public function __construct()
    {
        $this->parkirPengunjungModel = new parkirPengunjung_model();
    }

    public function index()
    {
        $data = [];
        return view('pages/pengunjung', $data);
    }

    public function welcome()
    {
        $data = [];
        return view('pages/welcomePeng');
    }

    public function keluar()
    {
        $data = [];
        return view('pages/trmPengunjung');
    }

    // fungsi untuk melakukan search pada database apabila data yang diinputkan ada pada database
    public function add()
    {
        $platNo = str_replace(' ', '', $this->request->getVar('plat_no'));
        $data = [
            'tipe_kendaraan' => $this->request->getVar('tipe'),
            'platNomor'     => $platNo,
            'tarif_parkir' => 0
        ];
        $this->parkirPengunjungModel->save($data);

        return redirect()->to('/Pengunjung/welcome');
    }
}
