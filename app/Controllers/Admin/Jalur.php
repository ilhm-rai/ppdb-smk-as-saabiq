<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JalurRegistrasiModel;

class Jalur extends BaseController
{
  protected $jalurRegistrasiModel;


  public function __construct()
  {
    $this->jalurRegistrasiModel = new JalurRegistrasiModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Jalur | PPDB SMK As-Saabiq',
      'jalur' => $this->jalurRegistrasiModel->get()->getResultArray(),
    ];
    return view('dashboard/admin/jalur/index', $data);
  }
}
