<?php




namespace App\Controllers;

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

use CodeIgniter\Controller;
use App\Models\TahunModel;
use App\Models\DataSiswaModel;
use App\Models\RolesModel;
use App\Models\SettingsModel;
use App\Models\GuruModel;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['date', 'form', 'menu_helper', 'uri'];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
		$this->TahunModel =  new TahunModel();
		$request = \Config\Services::request();


		$this->db_check = \Config\Database::connect();
		$this->session = \Config\Services::session();

		$this->TahunModel =  new TahunModel();
		$this->DataSiswaModel =  new DataSiswaModel();
		$this->RolesModel =  new RolesModel();
		$this->SettingsModel =  new SettingsModel();
		$this->GuruModel =  new GuruModel();



		//$this->admin_model =  new Admin_model();
		//$this->siswa_model =  new Siswa_model();

		//$this->get_tahun_aktif = $this->TahunModel->tahun_sedang_aktif();
		//$this->tahun_aktif = $this->get_tahun_aktif['tahun_pelajaran'];
		if ($this->db_check->tableExists('general_tahun_pelajaran')) {
			$this->get_tahun_aktif = $this->TahunModel->tahun_sedang_aktif();
			$this->tahun_aktif = $this->get_tahun_aktif['tahun_pelajaran'];
		} else {
			$this->tahun_aktif = '0000/0000';
		}
	}
}
