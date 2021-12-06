<?php

function info_user()
{
  if (logged_in()) {
    $usersModel = Model('UsersModel');
    $user = $usersModel->getUserByIdObj(user_id());
    return $user;
  }
}

function requirements_complete()
{
  if (logged_in()) {
    // $usersModel = Model('UsersModel');
    $identitasModel = Model('IdentitasModel');
    $ortuModel = Model('OrtuModel');
    $akademikModel = Model('AkademikModel');

    $myIdetitas = $identitasModel->getWhere(['user_id' => user()->id])->getRowArray();
    $myOrtu = $ortuModel->getWhere(['user_id' => user()->id])->getRowArray();
    $myAkademik = $akademikModel->getWhere(['user_id' => user()->id])->getRowArray();
    if ($myIdetitas && $myOrtu && $myAkademik) {
      return true;
    } else {
      return false;
    }
  }
}

function registered()
{
  $tahunAkademikModel = Model('TahunAkademikModel');
  $registrasiModel = Model('RegistrasiModel');
  $tahun = $tahunAkademikModel->getWhere(['active' => 1])->getRowArray();

  $registrasi = $registrasiModel->getRegistrasiByUserIdAndTahunId(info_user()->id, $tahun['id']);
  if ($registrasi) {
    return true;
  }
  return false;
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
  return ($myProgress / $amountRequirement * 100);
}
