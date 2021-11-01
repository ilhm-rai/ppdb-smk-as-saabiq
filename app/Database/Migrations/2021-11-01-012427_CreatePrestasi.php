<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePrestasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_prestasi' => [
                'type' => 'varchar',
                'constraint' => '128'
            ],
            'peringkat' => [
                'type' => 'varchar',
                'constraint' => '3'
            ],
            'tingkat' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'penyelenggara'  => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'tahun'  => [
                'type' => 'year'
            ],
            'file_sertifikat'  => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'user_id' => [
                'type' => 'int',
                'unsigned' => true
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('prestasi');
    }

    public function down()
    {
        $this->forge->dropTable('prestasi', false, true);
    }
}
