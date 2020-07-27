<?php

namespace App\Controllers\Guru;

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

//use App\Models\Admin_model;
//use App\Models\Siswa_model;
use CodeIgniter\Controller;

use App\Models\TahunModel;
use App\Models\DataSiswaModel;
use App\Models\RolesModel;
use App\Models\SettingsModel;
use App\Models\UserAdminModel;
use App\Models\GuruModel;
use App\Models\SettingsMenuModel;
use App\Models\SuratKeluarModel;



class GuruBaseController extends Controller
{
	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 * 
	 * @var array
	 */
	protected $helpers = ['array', 'form', 'url', 'date'];
	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{

		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		$this->validation =  \Config\Services::validation();

		$session = \Config\Services::session();
		$this->admin_id = $session->get('admin_id');

		$this->TahunModel =  new TahunModel();
		$this->DataSiswaModel =  new DataSiswaModel();
		$this->RolesModel =  new RolesModel();
		$this->SettingsModel =  new SettingsModel();
		$this->UserAdminModel =  new UserAdminModel();
		$this->GuruModel =  new GuruModel();
		$this->SettingsMenuModel =  new SettingsMenuModel();
		$this->SuratKeluarModel =  new SuratKeluarModel();

		//$this->admin_model =  new Admin_model();
		//$this->siswa_model =  new Siswa_model();

		$this->user_name = $this->UserAdminModel->get_user_admin($this->admin_id); // Get Login User ID
		$this->get_tahun_aktif = $this->TahunModel->tahun_sedang_aktif();
		$this->tahun_aktif = $this->get_tahun_aktif['tahun_pelajaran'];




		////------------------------------------------------------------------
		//$foto = $this->user_name['image'];
		//	$image = WRITEPATH . 'uploads/images/profile/guru-admin-upload/' . $foto;
		//$imageData = base64_encode(file_get_contents($image));

		//	$this->load_image = 'data: ' . mime_content_type($image) . ';base64,' . $imageData; // Load Profile Photo From Upload

		////------------------------------------------------------------------
	}
}
