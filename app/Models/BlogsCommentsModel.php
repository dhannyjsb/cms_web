<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogsCommentsModel extends Model
{
    protected $table      = 'blogs_comments';
    protected $primaryKey = 'comment_id';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = [
        'comment_post_id',
        'comment_parrent_id',
        'nama_komentator',
        'email_komentator',
        'status_komentator',
        'isi_komentar',
        'categories_name',
        'categories_slug',
        'categories_desc',
    ];

    public function tambah_komentar($data)
    {
        $this->insert($data);
    }
    public function ambil_komentar($post_id)
    {
        $this->where('comment_post_id', $post_id);
        $this->orderby('created_at', 'desc');
        $query = $this->get();
        return $query->getresultarray();
    }
}
