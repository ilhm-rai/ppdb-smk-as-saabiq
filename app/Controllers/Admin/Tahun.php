<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TahunAkademikModel;

class Tahun extends BaseController
{
  protected $tahunAkademikModel;


  public function __construct()
  {
    $this->tahunAkademikModel = new TahunAkademikModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Tahun Akademik | PPDB SMK As-Saabiq',
      'tahun' => $this->tahunAkademikModel->get()->getResultArray(),
    ];
    return view('dashboard/admin/tahun/index', $data);
  }


  // detail
  public function detail($id)
  {
    $data = [
      'title'  => 'Detail Tahun Akademik | PPDB SMK As-Saabiq',
      'active' => 'admin-tahun',
      'tahun' => $this->tahunAkademikModel->getWhere(['id' => $id])->getRowArray(),
    ];
    // dd($data);
    return view('dashboard/admin/tahun/detail', $data);
  }

  // Add Data
  public function add()
  {
    $data = [
      'title'  => 'Tambah Tahun Akademik | PPDB SMK As-Saabiq',
      'active' => 'admin-tahun',
      'validation' => \Config\Services::validation(),
    ];
    return view('dashboard/admin/tahun/add', $data);
  }
  public function save()
  {
    if (!$this->validate([
      'tahun' => 'required'
    ])) {
      return redirect()->to('/admin/tahun/add')->withInput()->with('errors', $this->validator->getErrors());
    }
    $this->tahunAkademikModel->save([
      'tahun' => $this->request->getVar('tahun'),
      'active' => $this->request->getVar('status'),
    ]);
    session()->setFlashdata('message', 'Tahun akademik baru berhasil ditambahkan!');
    return redirect()->to('/admin/tahun');
  }


  // Edit data
  public function edit($id)
  {
    $data = [
      'title'  => 'Edit Tahun Akademik | PPDB SMK As-Saabiq',
      'active' => 'admin-tahun',
      'validation' => \Config\Services::validation(),
      'tahun'  => $this->tahunAkademikModel->getWhere(['id' => $id])->getRowArray(),
    ];
    return view('dashboard/admin/tahun/edit', $data);
  }

  public function update($id)
  {
    if (!$this->validate([
      'tahun' => 'required',
    ])) {
      return redirect()->to('/admin/thun/edit/' . $id)->withInput()->with('errors', $this->validator->getErrors());
    }
    $this->tahunAkademikModel->save([
      'id'    => $id,
      'tahun' => $this->request->getVar('tahun'),
      'active' => $this->request->getVar('status'),
    ]);
    session()->setFlashdata('message', 'Tahun akademik berhasil diubah!');
    return redirect()->to('/admin/tahun');
  }
  // End Edit

  // Delete jurusan
  public function delete($id)
  {
    $this->tahunAkademikModel->delete($id);
    session()->setFlashdata('message', 'Tahun akademik berhasil dihapus!');
    return redirect()->to('/admin/tahun');
  }
}
