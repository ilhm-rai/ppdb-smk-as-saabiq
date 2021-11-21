<?php

namespace App\Controllers\Admin\Users;

use App\Controllers\BaseController;
use App\Models\RolesModel;
use App\Models\UsersModel;

class Roles extends BaseController
{
  protected $roleModel;
  protected $usersModel;


  public function __construct()
  {
    $this->rolesModel = new RolesModel();
    $this->usersModel = new UsersModel();
  }


  public function index()
  {
    $data = [
      'title'  => 'Role User | Sportpedia',
      'active' => 'admin-users',
      'roles'  => $this->rolesModel->getAllRoles()
    ];
    // dd($data);
    return view('dashboard/admin/users/roles/index', $data);
  }


  // detail
  public function detail($id)
  {
    $data = [
      'title'  => 'Detail Role | Sportpedia',
      'active' => 'admin-users',
      'role' => $this->rolesModel->getWhere(['id' => $id])->getRowArray(),
      'users' => $this->usersModel->getUsersByRole($id),
    ];
    // dd($data);
    return view('dashboard/admin/users/roles/detail', $data);
  }

  // Add Data
  public function add()
  {
    $data = [
      'title'  => 'Tambah Roles | Sportpedia',
      'active' => 'admin-users',
      'validation' => \Config\Services::validation(),
    ];
    return view('dashboard/admin/users/roles/add', $data);
  }
  public function save()
  {
    if (!$this->validate([
      'name' => 'required'
    ])) {
      return redirect()->to('/admin/users/roles/add')->withInput()->with('errors', $this->validator->getErrors());
    }
    $this->rolesModel->save([
      'name' => $this->request->getVar('name'),
      'description' => $this->request->getVar('description'),
    ]);
    session()->setFlashdata('message', 'Role baru berhasil ditambahkan!');
    return redirect()->to('/admin/users/roles');
  }


  // Edit data
  public function edit($id)
  {
    $data = [
      'title'  => 'Edit Olahraga | sportpedia',
      'active' => 'admin-users',
      'validation' => \Config\Services::validation(),
      'role'  => $this->rolesModel->getWhere(['id' => $id])->getRowArray(),
    ];
    return view('dashboard/admin/users/roles/edit', $data);
  }

  public function update($id)
  {
    if (!$this->validate([
      'name' => 'required',
    ])) {
      return redirect()->to('/admin/users/roles/edit/' . $id)->withInput()->with('errors', $this->validator->getErrors());
    }
    $this->rolesModel->save([
      'id'    => $id,
      'name' => $this->request->getVar('name'),
      'description' => $this->request->getVar('description'),
    ]);
    session()->setFlashdata('message', 'Data role berhasil diubah!');
    return redirect()->to('/admin/users/roles/detail/' . $id);
  }
  // End Edit

  public function delete($id)
  {
    // cari role berdasarkan id
    $this->rolesModel->delete($id);
    session()->setFlashdata('message', 'Data role berhasil dihapus!');
    return redirect()->to('/admin/users/roles');
  }
}
