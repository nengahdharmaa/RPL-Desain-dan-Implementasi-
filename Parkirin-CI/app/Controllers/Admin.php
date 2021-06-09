<?php

namespace App\Controllers;

use App\Models\Tiketparkir_model;

class Admin extends BaseController
{
    // inisialisasi model
    protected $TiketparkirModel;
    public function __construct()
    {
        $this->TiketparkirModel = new Tiketparkir_model();
    }

    public function index()
    {
        $data['tiket_parkir'] =  $this->TiketparkirModel->findall();

        return view('pages/admin', $data);
    }
}
