<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GeneralTahunPelajaran extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'tahun_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'tahun_pelajaran' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'tahun_status' => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'tahun_keterangan' => [
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
		$this->forge->addKey('tahun_id', TRUE);
		$this->forge->createTable('general_tahun_pelajaran');

		$data_general_settings = [
			'tahun_id' => '1',
			'tahun_pelajaran'  => '2019/2020',
			'tahun_status' => '1',
			'tahun_keterangan' => 'Awal Tahun',
		];
		$this->db->table('general_tahun_pelajaran')->insert($data_general_settings);
	}

	public function down()
	{
		$this->forge->dropTable('general_tahun_pelajaran');
	}
}
