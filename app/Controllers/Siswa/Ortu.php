<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;

class Ortu extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Data Orang Tua | PPDB SMK As-Saabiq',
      'validation' => \Config\Services::validation(),
    ];
    return view('dashboard/siswa/ortu/index', $data);
  }
}
