<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MenuGroupDb extends Migration
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
			'title'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('menu_group');
	}

	public function down()
	{
		$this->forge->dropTable('menu_group');
	}
}
