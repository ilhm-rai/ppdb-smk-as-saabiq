<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JurusanModel;

class Jurusan extends BaseController
{
  protected $jurusanModel;


  public function __construct()
  {
    $this->jurusanModel = new JurusanModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Jurusan | PPDB SMK As-Saabiq',
      'jurusan' => $this->jurusanModel->get()->getResultArray(),
    ];
    return view('dashboard/admin/jurusan/index', $data);
  }
}
