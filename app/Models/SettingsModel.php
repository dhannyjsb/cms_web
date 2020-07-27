<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends Model
{
    protected $table      = 'general_settings';
    protected $primaryKey = 'settings_id';
    protected $updatedField  = 'updated_at';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'alamat_sekolah',
        'kota',
        'kabupaten',
        'provinsi',
        'kode_pos',
        'npsn_sekolah',
        'email_sekolah',
        'telpon_sekolah',
        'sort_sekolah',
        'status_sekolah',
        'kepala_sekolah',
        'jam_operasional',
        'nama_sekolah',
        'logo_sekolah',
        'logo_depan',
        'favicon',
        'background_panel',
        'facebook',
        'instagram',
        'twitter',
        'linkedin'
    ];

    public function get_settings_id()
    {
        return $this->where(['settings_id' => 1])->first();
    }
    public function save_pengaturan($data)
    {
        $this->where('settings_id', 1);
        $this->update(1, $data);
        return true;
    }
}
