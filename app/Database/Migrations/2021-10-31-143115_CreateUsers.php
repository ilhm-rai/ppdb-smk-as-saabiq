<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => 128,
                'unique' => true,
            ],
            'username' => [
                'type' => 'varchar',
                'constraint' => 128,
                'unique' => true,
            ],
            'active' => [
                'type' => 'enum',
                'constraint' => ['0', '1'],
                'default' => '0',
            ],
            'role_id'  => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('role_id', 'roles', 'id', 'CASCADE', 'NO ACTION');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users', false, true);
    }
}
