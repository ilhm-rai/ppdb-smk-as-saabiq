<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJalurRegistrasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'role_name' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'deskripsi' => [
                'type' => 'varchar',
                'constraint' => 128,
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('jalur_registrasi');
    }

    public function down()
    {
        $this->forge->dropTable('jalur_registrasi', false, true);
    }
}
