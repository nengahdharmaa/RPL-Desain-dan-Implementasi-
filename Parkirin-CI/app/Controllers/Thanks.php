<?php

namespace App\Controllers;

use App\Models\Pengunjung_model;


class Thanks extends BaseController
{
    protected $pengunjungModel;
    public function index()
    {
        $data = [];
        return view('pages/thank', $data);
    }

    // fungsi untuk melakukan search pada database apabila data yang diinputkan ada pada database
    public function add()
    {

        return redirect()->to('/thanks/index');
    }
}
