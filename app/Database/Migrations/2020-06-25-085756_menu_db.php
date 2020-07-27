<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MenuDB extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'parent_id'          => [
				'type'           => 'INT',
				'constraint'     => 5
			],
			'title' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'url' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'position' => [
				'type'           => 'INT',
				'constraint'     => 5
			],
			'group_id' => [
				'type'           => 'INT',
				'constraint'     => 5
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
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('menu_db');
	}

	public function down()
	{
		$this->forge->dropTable('menu_db');
	}
}
