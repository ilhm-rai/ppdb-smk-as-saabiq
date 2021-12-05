<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BannerModel;
use App\Models\Model;


class Dashboard extends BaseController
{
  protected $bannerModel;


  public function __construct()
  {
    $this->bannerModel = new BannerModel();
  }
  public function index()
  {
    $data = [
      'title' => 'Dashboard | PPDB SMK As-Saabiq',
      'banners' => $this->bannerModel->get()->getResultArray(),
    ];
    return view('dashboard/admin/index', $data);
  }
}
