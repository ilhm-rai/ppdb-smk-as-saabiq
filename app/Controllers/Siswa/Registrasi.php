<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use App\Models\JalurRegistrasiModel;
use App\Models\RegistrasiModel;
use App\Models\TahunAkademikModel;

class Registrasi extends BaseController
{
  protected $jalurRegistrasiModel;
  protected $registrasiModel;
  protected $tahunAkademikModel;


  public function __construct()
  {
    $this->jalurRegistrasiModel = new JalurRegistrasiModel();
    $this->registrasiModel = new RegistrasiModel();
    $this->tahunAkademikModel = new TahunAkademikModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Registrasi | PPDB SMK As-Saabiq',
      'validation' => \Config\Services::validation(),
      'tahun' => $this->tahunAkademikModel->getWhere(['active' => 1])->getRowArray(),
      'jalur' => $this->jalurRegistrasiModel->get()->getResultArray()
    ];
    return view('dashboard/siswa/registrasi/index', $data);
  }
}
