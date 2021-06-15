<?php

namespace App\Models;

use CodeIgniter\Model;

class parkirPengunjung_model extends Model
{
    protected $table        = 'parkir';
    protected $id           = 'id_tiket';
    protected $allowedFields = ['tipe_kendaraan', 'platNomor', 'tanggal_masuk', 'jam_masuk', 'tanggal_keluar', 'jam_keluar', 'tarif_parkir'];

    public function countTarif($tgl_keluar, $tgl_masuk, $jam_keluar, $jam_masuk, $tipe_kendaraan)
    {
        $hours = abs($tgl_masuk - $tgl_keluar) / (3600);
        $hours = $hours + abs($jam_masuk - $jam_keluar) / (60 * 60 * 24);
        if ($tipe_kendaraan = "M") {
            $tarif = $hours * 3000;
        } else {
            $tarif = $hours * 2000;
        }
        return $tarif;
    }

    public function updatePeng($id, $data)
    {
        return $this->db
            ->table('parkir')
            ->where(["platNomor" => $id])
            ->set($data)
            ->update();
    }
}
