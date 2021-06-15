<?php

namespace App\Controllers;

use App\Models\parkirPengunjung_model;

class Pengunjung extends BaseController
{
    protected $parkirPengunjungModel;
    protected $session;
    public function __construct()
    {
        $this->parkirPengunjungModel = new parkirPengunjung_model();
        $this->session = \Config\Services::session();
        $this->session->start();
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

    public function goodbye()
    {
        $tarif = $this->session->get('tarif');
        $data = [
            'tarif' => $tarif
        ];
        return view('pages/thank', $data);
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

    public function out()
    {
        $tic = str_replace(' ', '', $this->request->getVar('plat_no'));
        $cond = array('platNomor' => $tic, 'jam_keluar' => null, 'tarif_parkir' => 0);
        $check = $this->parkirPengunjungModel->where($cond)->first();
        if ($check != null) {
            $id = $check['id_tiket'];
            $tgl1 = strtotime($check['tanggal_masuk']);
            $tgl2 = date("Y-m-d");
            $jam1 = strtotime($check['jam_masuk']);
            $jam2 = date('H:i:s');
            $tk = $check['tipe_kendaraan'][0];
            $data = [
                'tanggal_keluar' => $tgl2,
                'jam_keluar' => $jam2,
            ];
            $tarif = $this->parkirPengunjungModel->countTarif(strtotime($tgl2), $tgl1, strtotime($jam2), $jam1, $tk);
            $data['tarif_parkir'] = $tarif;
            $this->parkirPengunjungModel->updatePeng($tic, $data);
            $this->session->set('tarif', $tarif);
            return redirect()->to(base_url('Pengunjung/goodbye'));
        } else {
            return redirect()->to(base_url('Pengunjung/keluar'));
        }
    }
}
