<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRoles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'role_name' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'description' => [
                'type' => 'varchar',
                'constraint' => 128,
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('roles');
    }

    public function down()
    {
        $this->forge->dropTable('roles');
    }
}
