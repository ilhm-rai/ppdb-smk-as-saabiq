<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrasiModel extends Model
{
  protected $table = 'registrasi';
  protected $allowedFields = ['id_tahun', 'nomor_registrasi', 'status', 'jalur_id'];
  protected $useTimestamps = true;
}
