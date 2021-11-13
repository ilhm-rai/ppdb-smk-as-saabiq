<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJurusan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_jurusan' => [
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
        $this->forge->createTable('jurusan');
    }

    public function down()
    {
        $this->forge->dropTable('jurusan', false, true);
    }
}
