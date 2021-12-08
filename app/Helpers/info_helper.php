<?php

use CodeIgniter\Model;

function anouncement()
{
  $tahunModel = Model('TahunAkademikModel');
  $registrasiModel = Model('RegistrasiModel');
  $tahunAkademik = $tahunModel->getWhere(['active' => 1])->getRowArray();
  $timeToAnouncement = strtotime($tahunAkademik['anounc_date']);

  if (now() >= $timeToAnouncement) {
    // $lulus = $registrasiModel->getWhere(['tahun_id' => $tahunAkademik['id'], 'status' => 'Diterima'])->getResultArray();
    $tahunModel->save([
      'id' => $tahunAkademik['id'],
      'status' => 'Pengumuman',
    ]);
    return true;
  }
  return false;
}

function deadline()
{
  $tahunModel = Model('TahunAkademikModel');
  $tahunAkademik = $tahunModel->getWhere(['active' => 1])->getRowArray();
  $deadline = strtotime($tahunAkademik['end_date']);
  if (now() >= $deadline) {
    $tahunModel->save([
      'id' => $tahunAkademik['id'],
      'status' => 'Review'
    ]);
    return true;
  }
}

function registrationOpen()
{
  $tahunModel = Model('TahunAkademikModel');
  $tahunAkademik = $tahunModel->getWhere(['active' => 1])->getRowArray();
  if ($tahunAkademik) {
    $start = strtotime($tahunAkademik['start_date']);
    $deadline = strtotime($tahunAkademik['end_date']);
    if (now() >= $start && $tahunAkademik['active'] == 1) {
      return true;
    }
  }
  return false;
}

function info_user()
{
  if (logged_in()) {
    $usersModel = Model('UsersModel');
    $user = $usersModel->getUserByIdObj(user_id());
    return $user;
  }
}
// Requirement
function myIdetity()
{
  if (logged_in()) {
    $identitasModel = Model('IdentitasModel');
    $myIdetitas = $identitasModel->getWhere(['user_id' => user()->id])->getRowArray();
    if ($myIdetitas) {
      return true;
    }
  }
}
function myOrtu()
{
  if (logged_in()) {
    $ortuModel = Model('OrtuModel');
    $myOrtu = $ortuModel->getWhere(['user_id' => user()->id])->getRowArray();
    if ($myOrtu) {
      return true;
    }
  }
}
function myAkademik()
{
  if (logged_in()) {
    $akademikModel = Model('AkademikModel');
    $myAkademik = $akademikModel->getWhere(['user_id' => user()->id])->getRowArray();
    if ($myAkademik) {
      return true;
    }
  }
}
function myNilai()
{
  if (logged_in()) {
    $nilaiModel = Model('NilaiModel');
    $myNilai = $nilaiModel->getWhere(['user_id' => user()->id])->getRowArray();
    if ($myNilai) {
      return true;
    }
  }
}
function myPrestasi()
{
  if (logged_in()) {
    $prestasiModel = Model('PrestasiModel');
    $myPrestasi = $prestasiModel->getWhere(['user_id' => user()->id])->getResultArray();
    if ($myPrestasi) {
      return true;
    }
  }
}
function myDocument()
{
  if (logged_in()) {
    $documentModel = Model('DokumenModel');
    $myDocument = $documentModel->getWhere(['user_id' => user()->id])->getResultArray();
    if ($myDocument) {
      return true;
    }
  }
}

function progress_requirement()
{
  if (logged_in()) {
    $amountRequirement = 5;
    $myProgress = 0;
    if (myIdetity()) {
      $myProgress++;
    }
    if (myOrtu()) {
      $myProgress++;
    }
    if (myAkademik()) {
      $myProgress++;
    }
    if (myNilai()) {
      $myProgress++;
    }
    if (myDocument()) {
      $myProgress++;
    }
    return ($myProgress / $amountRequirement * 100);
  }
}

function requirements_complete()
{
  if (logged_in()) {
    if (progress_requirement() == 100) {
      return true;
    }
    return false;
  }
}


function registered()
{
  if (logged_in()) {
    $registrasiModel = Model('RegistrasiModel');
    $myRegistrasi = $registrasiModel->getWhere(['user_id' => user_id()])->getRowArray();
    if ($myRegistrasi) {
      return true;
    }
    return false;
  }
}
