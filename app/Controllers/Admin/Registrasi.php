<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\RegistrasiModel;
use App\Models\TahunAkademikModel;

class Registrasi extends BaseController
{
  protected $registrasiModel;
  protected $tahunAkademikModel;


  public function __construct()
  {
    $this->registrasiModel = new RegistrasiModel();
    $this->tahunAkademikModel = new TahunAkademikModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Registrasi | PPDB SMK As-Saabiq',
      'tahun' => $this->tahunAkademikModel->get()->getResultArray(),
      'registrasi' => $this->registrasiModel->get()->getResultArray(),
    ];
    return view('dashboard/admin/registrasi/index', $data);
  }


  // detail
  public function detail($id)
  {
    $data = [
      'title'  => 'Detail Jalur | PPDB SMK As-Saabiq',
      'active' => 'admin-jalur',
      'jalur' => $this->jalurRegistrasiModel->getWhere(['id' => $id])->getRowArray(),
    ];
    // dd($data);
    return view('dashboard/admin/jalur/detail', $data);
  }

  // Add Data
  public function add()
  {
    $data = [
      'title'  => 'Tambah Jalur | PPDB SMK As-Saabiq',
      'active' => 'admin-jalur',
      'validation' => \Config\Services::validation(),
    ];
    return view('dashboard/admin/jalur/add', $data);
  }
  public function save()
  {
    if (!$this->validate([
      'nama' => 'required'
    ])) {
      return redirect()->to('/admin/jalur/add')->withInput()->with('errors', $this->validator->getErrors());
    }
    $this->jalurRegistrasiModel->save([
      'nama_jalur' => $this->request->getVar('nama'),
      'deskripsi' => $this->request->getVar('deskripsi'),
    ]);
    session()->setFlashdata('message', 'Jalur registrasi baru berhasil ditambahkan!');
    return redirect()->to('/admin/jalur');
  }


  // Edit data
  public function edit($id)
  {
    $data = [
      'title'  => 'Edit Jalur | PPDB SMK As-Saabiq',
      'active' => 'admin-jalur',
      'validation' => \Config\Services::validation(),
      'jalur'  => $this->jalurRegistrasiModel->getWhere(['id' => $id])->getRowArray(),
    ];
    return view('dashboard/admin/jalur/edit', $data);
  }

  public function update($id)
  {
    if (!$this->validate([
      'nama' => 'required',
    ])) {
      return redirect()->to('/admin/jalur/edit/' . $id)->withInput()->with('errors', $this->validator->getErrors());
    }
    $this->jalurRegistrasiModel->save([
      'id'    => $id,
      'nama_jalur' => $this->request->getVar('nama'),
      'deskripsi' => $this->request->getVar('deskripsi'),
    ]);
    session()->setFlashdata('message', 'Data jalur registrasi berhasil diubah!');
    return redirect()->to('/admin/jalur');
  }
  // End Edit

  // Delete jurusan
  public function delete($id)
  {
    $this->jalurRegistrasiModel->delete($id);
    session()->setFlashdata('message', 'Data jalur registrasi berhasil dihapus!');
    return redirect()->to('/admin/jalur');
  }
}
