<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Dashboard | PPDB SMK As-Saabiq'
    ];
    return view('dashboard/siswa/index', $data);
  }
}
