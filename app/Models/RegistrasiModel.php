<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrasiModel extends Model
{
  protected $table = 'registrasi';
  protected $allowedFields = ['user_id', 'tahun_id', 'nomor_registrasi', 'status', 'jalur_id', 'jurusan_id'];
  protected $useTimestamps = true;


  public function getRegistrasiByUserIdAndTahunId($userId, $tahunId)
  {
    $query = "SELECT `r`.*,`t`.`tahun`,`t`.`start_date`,`t`.`end_date`
    FROM `registrasi` AS `r`
    JOIN `tahun_akademik` AS `t`
    ON `r`.`tahun_id` = `t`.`id`
    WHERE `r`.`user_id` = $userId AND `r`.`tahun_id`= $tahunId
";
    return $this->db->query($query)->getRowArray();
  }
  public function getAmountRegistrasiByTahun()
  {
    $query = "SELECT COUNT(`r`.`id`) as `amount`
    FROM `registrasi` AS `r`
    JOIN `tahun_akademik` AS `t`
    ON `r`.`tahun_id` = `t`.`id`
    WHERE `t`.`active`= 1
";
    return $this->db->query($query)->getRowArray();
  }
}
