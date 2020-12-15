<?php

namespace App\Models;
use CodeIgniter\Model;

class BrsModel extends Model {
protected $table = 'brs';

protected $allowedFields = ['nama', 'kode_mk', 'nmr_induk'];
}
?>