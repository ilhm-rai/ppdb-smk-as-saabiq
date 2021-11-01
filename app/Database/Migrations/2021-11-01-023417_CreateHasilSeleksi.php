<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHasilSeleksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'hasil' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'deskripsi' => [
                'type' => 'text',
                'null' => true,
            ],
            'registrasi_id' => [
                'type' => 'int',
                'unsigned' => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('registrasi_id', 'registrasi', 'id');
        $this->forge->createTable('hasil_seleksi');
    }

    public function down()
    {
        $this->forge->dropTable('hasil_seleksi');
    }
}
