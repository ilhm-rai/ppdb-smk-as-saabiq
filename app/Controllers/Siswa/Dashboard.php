<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use App\Models\BannerModel;
use App\Models\RegistrasiModel;
use App\Models\JurusanModel;

class Dashboard extends BaseController
{
  protected $bannerModel;
  protected $registrasiModel;
  protected $jurusanModel;


  public function __construct()
  {
    $this->bannerModel = new BannerModel();
    $this->registrasiModel = new RegistrasiModel();
    $this->jurusanModel = new JurusanModel();
  }
  public function index()
  {
    $data = [
      'title' => 'Dashboard | PPDB SMK As-Saabiq',
      'banners' => $this->bannerModel->get()->getResultArray(),
      'registrasi' => $this->registrasiModel->getAmountRegistrasiByTahun(),
      'jurusan_amount' => $this->jurusanModel->countAll(),
    ];
    // dd($data);
    return view('dashboard/siswa/index', $data);
  }
}
