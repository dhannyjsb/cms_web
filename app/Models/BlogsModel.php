<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogsModel extends Model
{
    protected $table      = 'blogs';
    protected $primaryKey = 'post_id';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = [
        'post_view',
        'post',
    ];

    function get_posts()
    {
        $this->where('active', 1);
        $this->join('user_admin', 'user_admin.admin_id=blogs.post_author');
        $this->join('blogs_categories', 'blogs_categories.categories_id=blogs.post_categories', 'left');
        $this->select('blogs.*, 
        blogs_categories.categories_name as cata_name,
        blogs_categories.categories_slug as cata_slug,
        user_admin.nama_lengkap as admin_nama_lengkap');
        $this->orderby('created_at', 'desc');
        $query = $this->paginate(4, 'view');
        return $query;
    }
    function get_single_posts($post_slug)
    {
        $this->where('post_slug', $post_slug);
        $this->where('active', 1);
        if ($this->countAllResults() == 0) {
            return false;
        } else {
            $this->join('user_admin', 'user_admin.admin_id=blogs.post_author');
            $this->join('blogs_categories', 'blogs_categories.categories_id=blogs.post_categories', 'left');
            $this->select('blogs.*, 
            blogs_categories.categories_name as cata_name,
            blogs_categories.categories_slug as cata_slug,
            user_admin.nama_lengkap as admin_nama_lengkap');
            $this->where('post_slug', $post_slug);
            $query = $this->get();
            return $query->getRowArray();
        }
    }

    public function post_counter($post_slug)
    {
        return  $this->query("UPDATE blogs SET post_view = post_view + 1 where post_slug = '$post_slug'");
    }

    public function latest_post($jumlah_limit)
    {
        $this->where('active', 1);
        $this->orderby('created_at', 'desc');
        $this->limit();
        $query = $this->get($jumlah_limit);
        return $query->getresultarray();
    }

    public function top_post($jumlah_limit)
    {
        $this->where('active', 1);
        $this->orderby('post_view', 'desc');
        $this->limit();
        $query = $this->get($jumlah_limit);
        return $query->getresultarray();
    }
}
