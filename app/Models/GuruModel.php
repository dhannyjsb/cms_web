<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected $table      = 'data_guru';
    protected $primaryKey = 'no_urut';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    public function get_all_guru($tahun_pelajaran)
    {
        $this->orderBy('nama ASC');
        return $this->findAll();
    }
    public function filter_status()
    {
        $this->groupBy('status_kepegawaian');
        return $this->findAll();
    }
    public function hapus_guru($id)
    {
        $this->where('no_urut', $id);
        return $this->delete();
    }
    public function import_guru($data)
    {
        $this->insertBatch($data);
        return true;
    }
}
