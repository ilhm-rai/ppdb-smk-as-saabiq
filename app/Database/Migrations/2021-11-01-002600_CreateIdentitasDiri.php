<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateIdentitasDiri extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'nik' => [
                'type' => 'varchar',
                'constraint' => 16,
                'unique' => true
            ],
            'tempat_lahir' => [
                'type' => 'varchar',
                'constraint' => 128,
            ],
            'tgl_lahir datetime',
            'jenis_kelamin' => [
                'type' => 'enum',
                'constraint' => ['Laki-laki', 'Perempuan'],
            ],
            'anak_ke' => [
                'type' => 'varchar',
                'constraint' => 3,
            ],
            'jml_anak' => [
                'type' => 'varchar',
                'constraint' => 3,
            ],
            'agama' => [
                'type' => 'varchar',
                'constraint' => 15,
            ],
            'alamat' => [
                'type' => 'text',
            ],
            'user_id' => [
                'type' => 'int',
                'unsigned' => true,
                'unique' => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'NO ACTION');
        $this->forge->createTable('identitas_diri');
    }

    public function down()
    {
        $this->forge->dropTable('identitas_diri', false, true);
    }
}
