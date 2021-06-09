<?php

namespace App\Models;

use CodeIgniter\Model;

class Tiketparkir_model extends Model
{
    protected $table        = 'tiketparkir';
    protected $id           = 'id_tiket';
    protected $allowedFields = ['jam_keluar', 'tarif', 'id_parkir', 'jam_masuk', 'tanggal', 'plat_nomor'];
}
