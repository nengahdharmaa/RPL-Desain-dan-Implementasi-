<?php

namespace App\Models;

use CodeIgniter\Model;

class admin_model extends Model
{
    protected $table        = 'admin';
    protected $id           = 'id_admin';
    protected $allowedFields = ['id_pegawai', 'nama_pegawai'];
}
