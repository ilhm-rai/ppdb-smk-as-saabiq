<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDokumen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kartu_nisn' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'rapor' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'ijazah' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'kk' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'foto' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'user_id' => [
                'type' => 'int',
                'unsigned' => true,
                'unique' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('dokumen');
    }

    public function down()
    {
        $this->forge->dropTable('dokumen', false, true);
    }
}
