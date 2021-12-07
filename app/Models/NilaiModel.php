<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiModel extends Model
{

    protected $table                = 'nilai';
    protected $allowedFields        = ['user_id', 'b_sunda', 'b_inggris', 'pjok', 'ips', 'ipa', 'matematika', 'b_indo', 'ppkn', 'pai'];
}
