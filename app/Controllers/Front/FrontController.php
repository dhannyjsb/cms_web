<?php

namespace App\Controllers\Front;

use CodeIgniter\Controller;
use App\Models\TahunModel;
use App\Models\DataSiswaModel;
use App\Models\RolesModel;
use App\Models\SettingsModel;
use App\Models\GuruModel;
use App\Models\BlogsModel;
use App\Models\BlogsCatagoriesModel;
use App\Models\BlogsCommentsModel;


/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */


class FrontController extends Controller
{


    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['array', 'form', 'url', 'date', 'menu_helper'];

    /**
     * Constructor.
     */
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {

        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        //--------------------------------------------------------------------
        $this->TahunModel =  new TahunModel();
        $request = \Config\Services::request();


        $this->db_check = \Config\Database::connect();
        $this->session = \Config\Services::session();

        $this->TahunModel =  new TahunModel();
        $this->DataSiswaModel =  new DataSiswaModel();
        $this->RolesModel =  new RolesModel();
        $this->SettingsModel =  new SettingsModel();
        $this->GuruModel =  new GuruModel();
        $this->BlogsModel =  new BlogsModel();
        $this->BlogsCatagoriesModel =  new BlogsCatagoriesModel();
        $this->BlogsCommentsModel  =  new BlogsCommentsModel();



        $session = \Config\Services::session();

        //$this->tahun_aktif = $this->get_tahun_aktif['tahun_pelajaran'];
        if ($this->db_check->tableExists('general_tahun_pelajaran')) {
            $this->get_tahun_aktif = $this->TahunModel->tahun_sedang_aktif();
            $this->tahun_aktif = $this->get_tahun_aktif['tahun_pelajaran'];
        } else {
            $this->tahun_aktif = '0000/0000';
        }


        ////------------------------------------------------------------------
        //$foto = $this->user_name['image'];
        //	$image = WRITEPATH . 'uploads/images/profile/guru-admin-upload/' . $foto;
        //$imageData = base64_encode(file_get_contents($image));

        //	$this->load_image = 'data: ' . mime_content_type($image) . ';base64,' . $imageData; // Load Profile Photo From Upload

        ////------------------------------------------------------------------
    }
}
