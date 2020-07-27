<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BlogsCategories extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'categories_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'categories_name' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'categories_slug' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'categories_desc' => [
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
		$this->forge->addKey('categories_id', TRUE);
		$this->forge->createTable('blogs_categories');
	}

	public function down()
	{
		$this->forge->dropTable('blogs_categories');
	}
}
