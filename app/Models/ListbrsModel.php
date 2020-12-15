<?php

namespace App\Models;
use CodeIgniter\Model;

class ListbrsModel extends Model {
protected $table = 'brs''matakuliah';

protected $allowedFields = ['nm_mk', 'kode_mk', 'sks', 'kt_mk', 'keterangan'];
}
?>