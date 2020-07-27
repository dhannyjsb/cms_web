<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratExtraModel extends Model
{
    protected $table      = 'surat_extra';
    protected $primaryKey = 'surat_extra_id';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = [
        'no_surat_extra',
        'second_surat_extra',
        'no_berkas_extra',
        'alamat_surat_extra',
        'tanggal_surat_extra',
        'perihal_surat_extra',
        'tahun_surat_extra',
        'pembuat_surat_extra',
        'pengedit_ssurat_extra',
        'penghapus_surat_extra',
        'id_gdrive_sk',
    ];
    public function get_surat_extra_list()
    {
        $this->join('user_admin', 'user_admin.id_unik = surat_extra.pembuat_surat_extra');
        $this->select('user_admin.nama_lengkap');
        $this->select('surat_extra.*');
        $this->orderBy('no_surat_extra');
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
    public function hapus_surat_extra($id, $penghapus_surat_extra)
    {
        $data = array(
            'penghapus_surat_extra' => $penghapus_surat_extra,
        );
        $this->where('surat_extra_id', $id);
        $this->update($id, $data);
        $this->where('surat_extra_id', $id);
        return $this->delete();
    }
    public function tambah_surat_extra($data)
    {
        return $this->insert($data);
    }
    public function view_surat_extra_by_id($id)
    {
        return $this->where(['surat_extra_id' => $id])->first();
    }
    public function simpan_edit_surat_extra($id_surat, $data)
    {
        $this->where('surat_extra_id', $id_surat);
        return $this->update($id_surat, $data);
    }
}
