<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserSiswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'user_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'user_role_id'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'username' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'nama_lengkap' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'email' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'mobile_no' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'image' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'twitter' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'facebook' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'instagram' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'linkedin' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'website' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'gender' => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'password' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'last_login' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'is_active' => [
				'type'           => 'INT',
				'constraint'     => 4,
			],
			'token' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'password_reset_code' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'last_ip' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'created_at' => [
				'type'           => 'DATETIME',
			],
			'updated_at' => [
				'type'           => 'DATETIME',
			],
			'deleted_at' => [
				'type'           => 'DATETIME',
			],
		]);
		$this->forge->addKey('user_id', TRUE);
		$this->forge->createTable('user_siswa');
	}

	public function down()
	{
		$this->forge->dropTable('user_siswa');
	}
}
