<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;

class Nilai extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Data Nilai | PPDB SMK As-Saabiq',
      'validation' => \Config\Services::validation(),
    ];
    return view('dashboard/siswa/nilai/index', $data);
  }
}
