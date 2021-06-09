<?php

namespace App\Models;

use CodeIgniter\Model;

class Pegawai_Model extends Model
{
    // Melakukan koneksi ke database
    protected $table            = 'pegawai';
    protected $id               = 'id_pegawai';
    protected $allowedFields    = 'id_pegawai';
}
