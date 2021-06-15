<?php

namespace App\Models;

use CodeIgniter\Model;

class parkirPengunjung_model extends Model
{
    protected $table        = 'parkir';
    protected $id           = 'id_tiket';
    protected $allowedFields = ['tipe_kendaraan', 'platNomor', 'tanggal_masuk', 'jam_masuk', 'tanggal_keluar', 'jam_keluar', 'tarif_parkir'];
}
