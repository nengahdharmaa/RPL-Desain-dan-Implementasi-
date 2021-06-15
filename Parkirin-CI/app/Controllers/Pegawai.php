<?php

namespace App\Controllers;

use App\Models\Pegawai_model;
use App\Models\parkirPegawai_model;

class Pegawai extends BaseController
{
    // inisialisasi model
    protected $pegawaiModel;
    protected $parkirPegawaiModel;
    public function __construct()
    {
        $this->pegawaiModel = new Pegawai_model();
        $this->parkirPegawaiModel = new parkirPegawai_model();
    }

    public function index()
    {
        $data = [];
        return view('pages/pegawai', $data);
    }

    public function welcome()
    {
        $data = [];
        return view('pages/welcomePeg', $data);
    }

    public function keluar()
    {
        $data = [];
        return view('pages/trmPegawai', $data);
    }

    public function goodbye()
    {
        $data = ['tarif' => null];
        return view('pages/thank', $data);
    }

    // fungsi untuk melakukan search pada database apabila data yang diinputkan ada pada database
    public function add()
    {
        $id = $this->request->getVar('id');
        $check = $this->pegawaiModel->where('id_pegawai', $id)->first();
        if ($check != null) {
            $data['id_pegawai'] = $id;
            $this->parkirPegawaiModel->save($data);
            return redirect()->to(base_url('Pegawai/welcome'));
        } else {
            return redirect()->to(base_url('Pegawai/index'));
        }
    }

    public function out()
    {
        $peg = $this->request->getVar('id');
        $cond = array('id_pegawai' => $peg, 'jam_keluar' => null, 'status' => 0);
        $check = $this->parkirPegawaiModel->where($cond)->first();
        if ($check != null) {
            $id = $check['id_parkir'];
            $data = [
                'tanggal_keluar' => date("Y-m-d"),
                'jam_keluar' => date('H:i'),
                'status' => 0
            ];
            $this->parkirPegawaiModel->updatePeg($id, $data);
            return redirect()->to(base_url('Pegawai/goodbye'));
        } else {
            return redirect()->to(base_url('Pegawai/keluar'));
        }
    }
}
