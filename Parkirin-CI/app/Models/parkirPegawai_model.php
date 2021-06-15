<?php

namespace App\Models;

use CodeIgniter\Model;

class parkirPegawai_model extends Model
{
    protected $table        = 'parkir_pegawai';
    protected $id           = 'id_parkir';
    protected $allowedFields = ['id_pegawai', 'tanggal_masuk',  'jam_masuk', 'tanggal_keluar', 'jam_keluar', 'status'];

    public function updatePeg($id, $data)
    {
        return $this->db
            ->table('parkir_pegawai')
            ->where(["id_parkir" => $id])
            ->set($data)
            ->update();
    }
}
