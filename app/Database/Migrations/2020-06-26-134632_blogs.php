<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Blogs extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'post_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'post_title' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'post' => [
				'type'           => 'LONGTEXT',
			],
			'active' => [
				'type'           => 'INT',
				'constraint'     => 5
			],
			'type_komentar' => [
				'type'           => 'INT',
				'constraint'     => 5
			],
			'post_author' => [
				'type'           => 'INT',
				'constraint'     => 5
			],
			'post_editor' => [
				'type'           => 'INT',
				'constraint'     => 5
			],
			'post_categories' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'post_slug' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'post_image' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'post_tags' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'post_view' => [
				'type'           => 'INT',
				'constraint'     => 25,
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
		$this->forge->addKey('post_id', TRUE);
		$this->forge->createTable('blogs');
	}

	public function down()
	{
		$this->forge->dropTable('blogs');
	}
}
