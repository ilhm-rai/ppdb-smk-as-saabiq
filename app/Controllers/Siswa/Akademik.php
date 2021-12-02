<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;

class Akademik extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Data Akademik | PPDB SMK As-Saabiq',
      'validation' => \Config\Services::validation(),
    ];
    return view('dashboard/siswa/akademik/index', $data);
  }
}
