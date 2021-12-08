<?php

use CodeIgniter\Model;

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
  $identitasModel = Model('IdentitasModel');
  $myIdetitas = $identitasModel->getWhere(['user_id' => user()->id])->getRowArray();
  if ($myIdetitas) {
    return true;
  }
}
function myOrtu()
{
  $ortuModel = Model('OrtuModel');
  $myOrtu = $ortuModel->getWhere(['user_id' => user()->id])->getRowArray();
  if ($myOrtu) {
    return true;
  }
}
function myAkademik()
{
  $akademikModel = Model('AkademikModel');
  $myAkademik = $akademikModel->getWhere(['user_id' => user()->id])->getRowArray();
  if ($myAkademik) {
    return true;
  }
}
function myNilai()
{
  $nilaiModel = Model('NilaiModel');
  $myNilai = $nilaiModel->getWhere(['user_id' => user()->id])->getRowArray();
  if ($myNilai) {
    return true;
  }
}
function myPrestasi()
{
  $prestasiModel = Model('PrestasiModel');
  $myPrestasi = $prestasiModel->getWhere(['user_id' => user()->id])->getResultArray();
  if ($myPrestasi) {
    return true;
  }
}
function myDocument()
{
  $documentModel = Model('DokumenModel');
  $myDocument = $documentModel->getWhere(['user_id' => user()->id])->getResultArray();
  if ($myDocument) {
    return true;
  }
}

function progress_requirement()
{
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

function requirements_complete()
{
  if (progress_requirement() == 100) {
    return true;
  }
  return false;
}


function registered()
{
  $registrasiModel = Model('RegistrasiModel');
  $myRegistrasi = $registrasiModel->getWhere(['user_id' => user_id()])->getRowArray();
  if ($myRegistrasi) {
    return true;
  }
  return false;
}
