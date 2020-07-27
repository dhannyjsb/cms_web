<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogsCatagoriesModel extends Model
{
    protected $table      = 'blogs_categories';
    protected $primaryKey = 'categories_id';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = [
        'categories_name',
        'categories_slug',
        'categories_desc',
    ];

    function get_cate_list()
    {
        $this->orderby('categories_id', 'asc');
        $query = $this->get();
        return $query->getresultarray();
    }
}
