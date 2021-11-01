<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDataOrtu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kondisi_keluarga' => [
                'type' => 'text'
            ],
            'nama_wali' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'pekerjaan_wali' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'nama_ibu' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'pekerjaan_ibu' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'penghasilan_ibu' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'nama_ayah' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'pekerjaan_ayah' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'penghasilan_ayah' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'user_id' => [
                'type' => 'int',
                'unsigned' => true,
                'unique' => true,
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('data_ortu');
    }

    public function down()
    {
        $this->forge->dropTable('data_ortu', 'false', true);
    }
}
