<?php

namespace App\Controllers\Front;

class Notfound extends FrontController
{
    public function index()
    {
        $data['settings'] = $this->admin_model->get_settings_id();
        $data['back'] = previous_url();
        echo view('errors/error', $data);
    }

    //--------------------------------------------------------------------

}
