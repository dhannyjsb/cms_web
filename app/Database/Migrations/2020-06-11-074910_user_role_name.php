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
			[
				'role_id' => '1',
				'role_status'    => '1',
				'nama_role' => 'Admin',
				'keterangan' => 'Admin adalah user yang bisa mengatur data siswa di website'
			],
			[
				'role_id' => '2',
				'role_status'    => '1',
				'nama_role' => 'Guru',
				'keterangan' => 'Guru adalah user yang bisa melihat data siswa di panel'
			],
			[
				'role_id' => '3',
				'role_status'    => '1',
				'nama_role' => 'TU',
				'keterangan' => 'TU adalah user yang bisa melihat data siswa di panel'
			],
			[
				'role_id' => '4',
				'role_status'    => '1',
				'nama_role' => 'Siswa',
				'keterangan' => 'Siswa adalah anggota di web'
			],
			[
				'role_id' => '5',
				'role_status'    => '1',
				'nama_role' => 'Alumni',
				'keterangan' => 'Alumni adalah anggota di web'
			],
			[
				'role_id' => '6',
				'role_status'    => '1',
				'nama_role' => 'Tamu',
				'keterangan' => 'Tamu adalah anggota di web'
			],
			[
				'role_id' => '7',
				'role_status'    => '1',
				'nama_role' => 'No Reg',
				'keterangan' => 'No Reg adalah user belum login'
			]
		];
		$this->db->table('user_role_name')->insertBatch($data_role);
	}

	public function down()
	{
		$this->forge->dropTable('user_role_name');
	}
}
