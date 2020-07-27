<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratKeputusanModel extends Model
{
    protected $table      = 'surat_keputusan';
    protected $primaryKey = 'surat_keputusan_id';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = [
        'no_surat_keputusan',
        'second_surat_keputusan',
        'no_berkas_keputusan',
        'alamat_surat_keputusan',
        'tanggal_surat_keputusan',
        'perihal_surat_keputusan',
        'tahun_surat_keputusan',
        'pembuat_surat_keputusan',
        'pengedit_ssurat_keputusan',
        'penghapus_surat_keputusan',
        'id_gdrive_sk',
    ];
    public function get_surat_keputusan_list()
    {
        $this->join('user_admin', 'user_admin.id_unik = surat_keputusan.pembuat_surat_keputusan');
        $this->select('user_admin.nama_lengkap');
        $this->select('surat_keputusan.*');
        $this->orderBy('no_surat_keputusan');
        return  $this->findAll();
        //    $sql = "SELECT surat_keluar.*, T12.nama_lengkap
        // FROM (
        //     SELECT user_admin.* FROM user_admin
        //  UNION
        //      SELECT user_guru.* FROM user_guru
        //   UNION
        //       SELECT user_tu.* FROM user_tu
        //       ) as T12
        //  LEFT JOIN surat_keluar ON T12.id_unik = surat_keluar.pembuat_surat_keluar  
        //   WHERE surat_keluar.deleted_at IS NULL
        //   ";
        //      $result = $this->db->query($sql);

        //      return $result->getResultArray();
    }
    public function hapus_surat_keputusan($id, $penghapus_surat_keputusan)
    {
        $data = array(
            'penghapus_surat_keputusan' => $penghapus_surat_keputusan,
        );
        $this->where('surat_keputusan_id', $id);
        $this->update($id, $data);
        $this->where('surat_keputusan_id', $id);
        return $this->delete();
    }
    public function tambah_surat_keputusan($data)
    {
        return $this->insert($data);
    }
    public function view_surat_keputusan_by_id($id)
    {
        return $this->where(['surat_keputusan_id' => $id])->first();
    }
    public function simpan_edit_surat_keputusan($id_surat, $data)
    {
        $this->where('surat_keputusan_id', $id_surat);
        return $this->update($id_surat, $data);
    }
}
