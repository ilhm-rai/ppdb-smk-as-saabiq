<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRegistrasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nomor_registrasi' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
            'status' => [
                'type' => 'enum',
                'constraint' => ['Diterima', 'Ditolak', 'Pending'],
                'default' => 'Pending'
            ],
            'jalur_id' => [
                'type' => 'int',
                'unsigned' => true,
                'unique' => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('jalur_id', 'jalur_registrasi', 'id', 'CASCADE', 'NO ACTION');
        $this->forge->createTable('registrasi');
    }

    public function down()
    {
        $this->forge->dropTable('registrasi', false, true);
    }
}
