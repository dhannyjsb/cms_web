<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DbSiswa extends Migration
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
			'no'  => ['type' => 'varchar', 'constraint' => 70,],
			'nama'  => ['type' => 'varchar', 'constraint' => 70,],
			'nipd'  => ['type' => 'varchar', 'constraint' => 70,],
			'jk'  => ['type' => 'varchar', 'constraint' => 70,],
			'nisn'  => ['type' => 'varchar', 'constraint' => 70,],
			'tempat_lahir'  => ['type' => 'varchar', 'constraint' => 70,],
			'tanggal_lahir'  => ['type' => 'varchar', 'constraint' => 70,],
			'nik'  => ['type' => 'varchar', 'constraint' => 70,],
			'agama'  => ['type' => 'varchar', 'constraint' => 70,],
			'alamat'  => ['type' => 'varchar', 'constraint' => 70,],
			'rt'  => ['type' => 'varchar', 'constraint' => 70,],
			'rw'  => ['type' => 'varchar', 'constraint' => 70,],
			'dusun'  => ['type' => 'varchar', 'constraint' => 70,],
			'kelurahan'  => ['type' => 'varchar', 'constraint' => 70,],
			'kecamatan'  => ['type' => 'varchar', 'constraint' => 70,],
			'kode_pos'  => ['type' => 'varchar', 'constraint' => 70,],
			'jenis_tinggal'  => ['type' => 'varchar', 'constraint' => 70,],
			'alat_transportasi'  => ['type' => 'varchar', 'constraint' => 70,],
			'telepon'  => ['type' => 'varchar', 'constraint' => 70,],
			'hp'  => ['type' => 'varchar', 'constraint' => 70,],
			'email'  => ['type' => 'varchar', 'constraint' => 70,],
			'skhun'  => ['type' => 'varchar', 'constraint' => 70,],
			'penerima_kps'  => ['type' => 'varchar', 'constraint' => 70,],
			'no_kps'  => ['type' => 'varchar', 'constraint' => 70,],
			'nama_ayah'  => ['type' => 'varchar', 'constraint' => 70,],
			'tahun_lahir_ayah'  => ['type' => 'varchar', 'constraint' => 70,],
			'jenjang_pendidikan_ayah'  => ['type' => 'varchar', 'constraint' => 70,],
			'pekerjaan_ayah'  => ['type' => 'varchar', 'constraint' => 70,],
			'penghasilan_ayah'  => ['type' => 'varchar', 'constraint' => 70,],
			'nik_ayah'  => ['type' => 'varchar', 'constraint' => 70,],
			'nama_ibu'  => ['type' => 'varchar', 'constraint' => 70,],
			'tahun_lahir_ibu'  => ['type' => 'varchar', 'constraint' => 70,],
			'jenjang_pendidikan_ibu'  => ['type' => 'varchar', 'constraint' => 70,],
			'pekerjaan_ibu'  => ['type' => 'varchar', 'constraint' => 70,],
			'penghasilan_ibu'  => ['type' => 'varchar', 'constraint' => 70,],
			'nik_ibu'  => ['type' => 'varchar', 'constraint' => 70,],
			'nama_wali'  => ['type' => 'varchar', 'constraint' => 70,],
			'tahun_lahir_wali'  => ['type' => 'varchar', 'constraint' => 70,],
			'jenjang_pendidikan_wali'  => ['type' => 'varchar', 'constraint' => 70,],
			'pekerjaan_wali'  => ['type' => 'varchar', 'constraint' => 70,],
			'penghasilan_wali'  => ['type' => 'varchar', 'constraint' => 70,],
			'nik_wali'  => ['type' => 'varchar', 'constraint' => 70,],
			'rombel_saat_ini'  => ['type' => 'varchar', 'constraint' => 70,],
			'no_peserta_ujian_nasional'  => ['type' => 'varchar', 'constraint' => 70,],
			'no_seri_ijazah'  => ['type' => 'varchar', 'constraint' => 70,],
			'penerima_kip'  => ['type' => 'varchar', 'constraint' => 70,],
			'nomor_kip'  => ['type' => 'varchar', 'constraint' => 70,],
			'nama_di_kip'  => ['type' => 'varchar', 'constraint' => 70,],
			'nomor_kks'  => ['type' => 'varchar', 'constraint' => 70,],
			'no_registrasi_akta_lahir'  => ['type' => 'varchar', 'constraint' => 70,],
			'bank'  => ['type' => 'varchar', 'constraint' => 70,],
			'nomor_rekening_bank'  => ['type' => 'varchar', 'constraint' => 70,],
			'rekening_atas_nama'  => ['type' => 'varchar', 'constraint' => 70,],
			'layak_pip'  => ['type' => 'varchar', 'constraint' => 70,],
			'alasan_layak_pip'  => ['type' => 'varchar', 'constraint' => 70,],
			'kebutuhan_khusus'  => ['type' => 'varchar', 'constraint' => 70,],
			'sekolah_asal'  => ['type' => 'varchar', 'constraint' => 70,],
			'anak_ke'  => ['type' => 'varchar', 'constraint' => 70,],
			'lintang'  => ['type' => 'varchar', 'constraint' => 70,],
			'bujur'  => ['type' => 'varchar', 'constraint' => 70,],
			'no_kk'  => ['type' => 'varchar', 'constraint' => 70,],
			'berat_badan'  => ['type' => 'varchar', 'constraint' => 70,],
			'tinggi_badan'  => ['type' => 'varchar', 'constraint' => 70,],
			'lingkar_kepala'  => ['type' => 'varchar', 'constraint' => 70,],
			'jml_saudara_kandung'  => ['type' => 'varchar', 'constraint' => 70,],
			'jarak_rumah'  => ['type' => 'varchar', 'constraint' => 70,],
			'tahun_pelajaran'  => ['type' => 'varchar', 'constraint' => 70,],
			'created_at'  => ['type' => 'datetime',],
			'updated_at'  => ['type' => 'datetime',],
			'deleted_at'  => ['type' => 'datetime',],
		]);
		$this->forge->addKey('no_urut', TRUE);
		$this->forge->createTable('data_siswa');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('data_siswa');
	}
}
