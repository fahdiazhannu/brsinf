<?php
namespace App\Models;
use CodeIgniter\Model;

class UsersModel extends Model {
    protected $table = 'user';

    protected $allowedFields = ['nama', 'nmr_induk', 'kategori', 'email', 'password'];
}
?>