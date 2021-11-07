<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Dashboard | Sportpedia'
    ];
    return view('dashboard/admin/index', $data);
  }
}
