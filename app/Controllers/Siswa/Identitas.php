<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;

class Identitas extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Identitas Diri | PPDB SMK As-Saabiq',
      'validation' => \Config\Services::validation(),
    ];
    return view('dashboard/siswa/identitas/index', $data);
  }
}
