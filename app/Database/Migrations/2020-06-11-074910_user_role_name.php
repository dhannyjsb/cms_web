<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserRoleName extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'role_id'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'role_status'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'nama_role' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'keterangan' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('user_role_name');

		$data_role = [
			'role_id' => '1',
			'role_status'    => '1',
			'nama_role' => 'Admin',
			'keterangan' => 'Admin adalah user yang bisa mengatur data siswa di website'
		];
		$this->db->table('user_role_name')->insert($data_role);
	}

	public function down()
	{
		$this->forge->dropTable('user_role_name');
	}
}
