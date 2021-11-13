<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Dashboard | PPDB SMK As-Saabiq'
    ];
    return view('dashboard/admin/index', $data);
  }
}
