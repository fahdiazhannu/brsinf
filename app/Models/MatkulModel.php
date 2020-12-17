<?php

namespace App\Models;
use CodeIgniter\Model;

class MatkulModel extends Model {
protected $table = 'matakuliah';

protected $allowedFields = ['nm_mk', 'kode_mk', 'info_mk', 'keterangan', 'kt_mk', 'verifikasi'];
}
?>