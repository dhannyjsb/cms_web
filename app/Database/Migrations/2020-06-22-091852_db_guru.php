<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DbGuru extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'no_urut'          => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'nama'  => ['type' => 'varchar', 'constraint' => 70,],
			'nuptk'  => ['type' => 'varchar', 'constraint' => 70,],
			'jk'  => ['type' => 'varchar', 'constraint' => 70,],
			'tempat_lahir'  => ['type' => 'varchar', 'constraint' => 70,],
			'tanggal_lahir'  => ['type' => 'varchar', 'constraint' => 70,],
			'nip'  => ['type' => 'varchar', 'constraint' => 70,],
			'status_kepegawaian'  => ['type' => 'varchar', 'constraint' => 70,],
			'jenis_ptk'  => ['type' => 'varchar', 'constraint' => 70,],
			'agama'  => ['type' => 'varchar', 'constraint' => 70,],
			'alamat_jalan'  => ['type' => 'varchar', 'constraint' => 70,],
			'rt'  => ['type' => 'varchar', 'constraint' => 70,],
			'rw'  => ['type' => 'varchar', 'constraint' => 70,],
			'nama_dusun'  => ['type' => 'varchar', 'constraint' => 70,],
			'desa_kelurahan'  => ['type' => 'varchar', 'constraint' => 70,],
			'kecamatan'  => ['type' => 'varchar', 'constraint' => 70,],
			'kode_pos'  => ['type' => 'varchar', 'constraint' => 70,],
			'telepon'  => ['type' => 'varchar', 'constraint' => 70,],
			'hp'  => ['type' => 'varchar', 'constraint' => 70,],
			'email'  => ['type' => 'varchar', 'constraint' => 70,],
			'tugas_tambahan'  => ['type' => 'varchar', 'constraint' => 70,],
			'sk_cpns'  => ['type' => 'varchar', 'constraint' => 70,],
			'tanggal_cpns'  => ['type' => 'varchar', 'constraint' => 70,],
			'sk_pengangkatan'  => ['type' => 'varchar', 'constraint' => 70,],
			'tmt_pengangkatan'  => ['type' => 'varchar', 'constraint' => 70,],
			'lembaga_pengangkatan'  => ['type' => 'varchar', 'constraint' => 70,],
			'pangkat_golongan'  => ['type' => 'varchar', 'constraint' => 70,],
			'sumber_gaji'  => ['type' => 'varchar', 'constraint' => 70,],
			'nama_ibu_kandung'  => ['type' => 'varchar', 'constraint' => 70,],
			'status_perkawinan'  => ['type' => 'varchar', 'constraint' => 70,],
			'nama_suami_istri'  => ['type' => 'varchar', 'constraint' => 70,],
			'nip_suami_istri'  => ['type' => 'varchar', 'constraint' => 70,],
			'pekerjaan_suami_istri'  => ['type' => 'varchar', 'constraint' => 70,],
			'tmt_pns'  => ['type' => 'varchar', 'constraint' => 70,],
			'sudah_lisensi_kepala_sekolah'  => ['type' => 'varchar', 'constraint' => 70,],
			'pernah_diklat_kepengawasan'  => ['type' => 'varchar', 'constraint' => 70,],
			'keahlian_braille'  => ['type' => 'varchar', 'constraint' => 70,],
			'keahlian_bahasa_isyarat'  => ['type' => 'varchar', 'constraint' => 70,],
			'npwp'  => ['type' => 'varchar', 'constraint' => 70,],
			'nama_wajib_pajak'  => ['type' => 'varchar', 'constraint' => 70,],
			'kewarganegaraan'  => ['type' => 'varchar', 'constraint' => 70,],
			'bank'  => ['type' => 'varchar', 'constraint' => 70,],
			'nomor_rekening_bank'  => ['type' => 'varchar', 'constraint' => 70,],
			'rekening_atas_nama'  => ['type' => 'varchar', 'constraint' => 70,],
			'nik'  => ['type' => 'varchar', 'constraint' => 70,],
			'created_at'  => ['type' => 'datetime',],
			'updated_at'  => ['type' => 'datetime',],
			'deleted_at'  => ['type' => 'datetime',],
		]);
		$this->forge->addKey('no_urut', TRUE);
		$this->forge->createTable('data_guru');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('data_guru');
	}
}
