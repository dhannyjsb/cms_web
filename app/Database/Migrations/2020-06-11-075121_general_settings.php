<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GeneralSettings extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'settings_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'alamat_sekolah' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'kota' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'kabupaten' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'provinsi' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'kode_pos' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'npsn_sekolah' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'email_sekolah' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'telpon_sekolah' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'sort_sekolah' => [
				'type'           => 'VARCHAR',
				'constraint'     => '10',
			],
			'status_sekolah' => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'kepala_sekolah' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'jam_operasional' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'nama_sekolah' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'logo_sekolah' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'logo_depan' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'favicon' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'background_panel' => [
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
			'twitter' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'linkedin' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'updated_at' => [
				'type'           => 'DATETIME',
			],

		]);
		$this->forge->addKey('settings_id', TRUE);
		$this->forge->createTable('general_settings');

		$data_general_settings = [
			'settings_id' => '1',
			'alamat_sekolah'  => 'Jl. Jendral Sudirman, Marabahan',
			'npsn_sekolah' => '11223344',
			'sort_sekolah' => 'SMABA',
			'logo_sekolah' => 'logo_sekolah.png',
			'favicon' => 'logo_sekolah.png',
			'logo_depan' => 'logo_depan.png',
			'status_sekolah' => '1',
			'nama_sekolah' => 'SMAN 1 Barambai'
		];
		$this->db->table('general_settings')->insert($data_general_settings);
	}

	public function down()
	{
		$this->forge->dropTable('general_settings');
	}
}
