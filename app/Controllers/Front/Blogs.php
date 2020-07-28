<?php

namespace App\Controllers\Front;

$this->session = \Config\Services::session();

class Blogs extends FrontController
{
    public function index()
    {
        $data = [
            'posts' => $this->BlogsModel->get_posts(),
            'pager' => $this->BlogsModel->pager
        ];
        $data['settings'] = $this->SettingsModel->get_settings_id();
        $data['view'] = 'public/blogs/index';
        $data['sub_header'] = 'Blogs';
        $data['cate_list'] = $this->BlogsCatagoriesModel->get_cate_list(); //Categories Index		
        $data['latest_post'] = $this->BlogsModel->latest_post(3);
        $data['top_view'] = $this->BlogsModel->top_post(3);
        if ($this->session->get('is_login') == 1) {
            $data['data_user'] = $this->FrontModel->get_user_data($this->username);
        } else {
            $data['data_user'] = $this->FrontModel->get_user_null();
        }
        return view('public/layout', $data);
    }

    public function post($post_slug) //single post page
    {
        $data['settings'] = $this->SettingsModel->get_settings_id();
        $data['sub_header'] = 'Blogs';
        $data['post'] = $this->BlogsModel->get_single_posts($post_slug);
        $data['cate_list'] = $this->BlogsCatagoriesModel->get_cate_list(); //Categories Index	
        $data['latest_post'] = $this->BlogsModel->latest_post(3);
        $data['top_view'] = $this->BlogsModel->top_post(3);
        $post_id_by_slug = $this->BlogsModel->get_single_posts($post_slug);
        $data['data_komentar'] = $this->BlogsCommentsModel->ambil_komentar($post_id_by_slug['post_id']);
        if ($this->session->get('is_login') == 1) {
            $data['data_user'] = $this->FrontModel->get_user_data($this->username);
        } else {
            $data['data_user'] = $this->FrontModel->get_user_null();
        }
        if ($this->BlogsModel->get_single_posts($post_slug) == false) {
            $data['view'] = 'public/blogs/blog_not_found';
            return view('public/layout', $data);
        } else {
            $this->BlogsModel->post_counter($post_slug);
            $data['view'] = 'public/blogs/single_blog';
            return view('public/layout', $data);
        }
    }

    public function tambah_komentar()
    {
        if ($this->request->isAJAX()) {
            $data = array(
                'comment_post_id' => $this->request->getPost('comment_post_id'),
                'comment_parrent_id' => $this->request->getPost('comment_parrent_id'),
                'nama_komentator' => $this->request->getPost('name_komentar'),
                'email_komentator' => $this->request->getPost('email_komentar'),
                'status_komentator' => $this->request->getPost('kelas_komentar'),
                'isi_komentar' => $this->request->getPost('isi_komentar'),
            );
            $this->BlogsCommentsModel->tambah_komentar($data);
        }
    }
    //--------------------------------------------------------------------

}
