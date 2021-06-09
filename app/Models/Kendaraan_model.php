<?php

namespace App\Models;

use CodeIgniter\Model;

class Kendaraan_model extends Model
{
    protected $table        = 'kendaraan';
    protected $id           = 'plat_no';
    protected $allowedFields = ['tipe_kendaraan', 'plat_nomor'];
}
