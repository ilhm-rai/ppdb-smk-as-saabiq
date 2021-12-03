<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
  protected $table = 'users';
  protected $allowedFields = ['email', 'username', 'active', 'password_hash'];
  protected $useTimestamps = true;

  public function getAllUsers()
  {
    $query = "SELECT `u`.`id`,`u`.`user_image`,`u`.`username`,`u`.`email`,`u`.`active`,`ag`.`name` as `role_name`
        FROM `users` AS `u`
        JOIN `auth_groups_users` AS `agu`
        ON `agu`.`user_id` = `u`.`id`
        JOIN `auth_groups` AS `ag`
        ON `ag`.`id` = `agu`.`group_id`
    ";
    return $this->db->query($query)->getResultArray();
  }

  public function getUserById($id)
  {
    $query = "SELECT `u`.`id`,`u`.`user_image`,`u`.`username`,`u`.`email`,`u`.`active`,`ag`.`id` as `role_id`,`ag`.`name` as `role_name`
        FROM `users` AS `u`
        JOIN `auth_groups_users` AS `agu`
        ON `agu`.`user_id` = `u`.`id`
        JOIN `auth_groups` AS `ag`
        ON `ag`.`id` = `agu`.`group_id`
        WHERE `u`.`id` = $id
    ";
    return $this->db->query($query)->getRowArray();
  }
  public function getUserByIdObj($id)
  {
    $query = "SELECT `u`.`id`,`u`.`user_image`,`u`.`username`,`u`.`email`,`u`.`active`,`ag`.`id` as `role_id`,`ag`.`name` as `role_name`
        FROM `users` AS `u`
        JOIN `auth_groups_users` AS `agu`
        ON `agu`.`user_id` = `u`.`id`
        JOIN `auth_groups` AS `ag`
        ON `ag`.`id` = `agu`.`group_id`
        WHERE `u`.`id` = $id
    ";
    return $this->db->query($query)->getRow();
  }

  public function getUsersByRole($roleId)
  {
    $query = "SELECT `u`.`id`,`u`.`user_image`,`u`.`username`,`u`.`email`,`u`.`active`,`ag`.`id` as `role_id`,`ag`.`name` as `role_name`
    FROM `users` AS `u`
    JOIN `auth_groups_users` AS `agu`
    ON `agu`.`user_id` = `u`.`id`
    JOIN `auth_groups` AS `ag`
    ON `ag`.`id` = `agu`.`group_id`
    WHERE `agu`.`group_id` = $roleId
";
    return $this->db->query($query)->getResultArray();
  }
}
