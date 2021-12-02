<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;

class Dokumen extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Dokumen Pendukung | PPDB SMK As-Saabiq',
      'validation' => \Config\Services::validation(),
    ];
    return view('dashboard/siswa/dokumen/index', $data);
  }
}
