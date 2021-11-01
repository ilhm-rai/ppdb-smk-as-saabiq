<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNilai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'b_sunda' => [
                'type' => 'int',
                'constraint' => 3,
                'unsigned' => true,
            ],
            'b_inggris' => [
                'type' => 'int',
                'constraint' => 3,
                'unsigned' => true,
            ],
            'pjok' => [
                'type' => 'int',
                'constraint' => 3,
                'unsigned' => true,
            ],
            'ips' => [
                'type' => 'int',
                'constraint' => 3,
                'unsigned' => true,
            ],
            'ipa' => [
                'type' => 'int',
                'constraint' => 3,
                'unsigned' => true,
            ],
            'matematika' => [
                'type' => 'int',
                'constraint' => 3,
                'unsigned' => true,
            ],
            'b_indo' => [
                'type' => 'int',
                'constraint' => 3,
                'unsigned' => true,
            ],
            'ppkn' => [
                'type' => 'int',
                'constraint' => 3,
                'unsigned' => true,
            ],
            'pai' => [
                'type' => 'int',
                'constraint' => 3,
                'unsigned' => true,
            ],
            'user_id' => [
                'type' => 'int',
                'unsigned' => true,
                'unique' => true,
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'NO ACTION');
        $this->forge->createTable('nilai');
    }

    public function down()
    {
        $this->forge->dropTable('nilai', false, true);
    }
}
