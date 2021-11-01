<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDataAkademik extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nisn' => [
                'type' => 'varchar',
                'constraint' => 11,
            ],
            'asal_sekolah' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'no_ijazah' => [
                'type' => 'varchar',
                'constraint' => 11,
            ],
            'nis' => [
                'type' => 'varchar',
                'constraint' => 11,
            ],
            'user_id' => [
                'type' => 'int',
                'unsigned' => true,
                'unique' => true,
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('data_akademik');
    }

    public function down()
    {
        $this->forge->dropTable('data_akademik', false, true);
    }
}
