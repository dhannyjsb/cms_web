<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserAdmin extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'admin_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'user_role_id'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'id_unik' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
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
			'tahun_lahir' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'gender' => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'alamat' => [
				'type'           => 'TEXT',
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
			'is_supper' => [
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
				'type'           => 'datetime',
			],
			'updated_at' => [
				'type'           => 'datetime',
			],
			'deleted_at' => [
				'type'           => 'datetime',
			],
		]);
		$this->forge->addKey('admin_id', TRUE);
		$this->forge->createTable('user_admin');
		$data_admin = [
			'username' => 'admin',
			'nama_lengkap' => 'Super Admin',
			'id_unik' => '8IIn6II7',
			'email' => 'admin@mail.com',
			'mobile_no' => '080989999',
			'user_role_id' => '1',
			'is_active' => '1',
			'image' => 'default.jpg',
			'password'    => '$2y$10$/mGG9bQbl0j5UBBKUDmwOu9xHkHyj0TKO6jtb.RubA9jW2zRRIa82'
		];
		$this->db->table('user_admin')->insert($data_admin);
	}

	public function down()
	{
		$this->forge->dropTable('user_admin');
	}
}
