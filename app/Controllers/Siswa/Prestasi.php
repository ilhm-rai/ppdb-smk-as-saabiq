<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;

class Prestasi extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Data Prestasi | PPDB SMK As-Saabiq',
      'validation' => \Config\Services::validation(),
    ];
    return view('dashboard/siswa/prestasi/index', $data);
  }
}
