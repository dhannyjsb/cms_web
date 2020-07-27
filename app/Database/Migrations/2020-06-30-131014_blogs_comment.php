<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BlogsComment extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'comment_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'comment_post_id' => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'comment_parrent_id' => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'nama_komentator' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'email_komentator' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'status_komentator' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'isi_komentar' => [
				'type'           => 'LONGTEXT'
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
		$this->forge->addKey('comment_id', TRUE);
		$this->forge->createTable('blogs_comments');
	}

	public function down()
	{
		$this->forge->dropTable('blogs_comments');
	}
}
