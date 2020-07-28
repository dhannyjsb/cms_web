<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Front\Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
//$routes->set404Override('App\Controllers\Front\Notfound::index');

$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Front\Home::index');
$routes->get('//', 'Front\Home::index');
$routes->get('login', 'Auth::index', ['filter' => 'cek_status']);
$routes->post('auth/login', 'Auth::login');
$routes->get('auth/login', 'Auth::login');

$routes->add('logout', 'Auth::logout');
$routes->get('init', 'Auth::first_init_system');


$routes->get('akun', 'Akun::index');

$routes->get('blogs', 'Front\Blogs::index');
$routes->get('blogs/read/(:any)', 'Front\Blogs::post/$1');
$routes->post('blogs/tambah_komentar', 'Front\Blogs::tambah_komentar');

$routes->group('siswa', ['filter' => 'admin_auth'], function ($routes) {
	$routes->get('/', 'Siswa\Home::index');
});

$routes->group('admin', ['filter' => 'admin_auth'], function ($routes) {
	$routes->get('/', 'Admin\Home::index');
	$routes->get('profile', 'Admin\Home::profile');
	$routes->post('profile', 'Admin\Home::profile');
	$routes->post('profile/upload_foto', 'Admin\Home::upload_foto');

	$routes->post('settings', 'Admin\Settings::simpan_pengaturan');
	$routes->post('settings/modal', 'Admin\Settings::load_modal_photo');
	$routes->get('settings', 'Admin\Settings::index');
	$routes->get('settings/year', 'Admin\Settings::tahun_pelajaran');
	$routes->post('settings/year', 'Admin\Settings::tahun_pelajaran');
	$routes->post('settings/hapus', 'Admin\Settings::hapus_tahun');
	$routes->post('settings/year/tahun_pelajaran_aktif', 'Admin\Settings::tahun_aktif');
	$routes->get('settings/tahun_pelajaran', 'Admin\Settings::get_tahun_pelajaran');

	$routes->get('menu_settings', 'Admin\Settingsmenu::index');
	$routes->post('menu_settings/save', 'Admin\Settingsmenu::save_position');
	$routes->post('menu_settings/add', 'Admin\Settingsmenu::add');

	$routes->get('siswa', 'Admin\Siswa::index');
	$routes->get('siswa/tampilkan_siswa', 'Admin\Siswa::get_siswa');
	$routes->post('siswa/hapus', 'Admin\Siswa::hapus');
	$routes->get('siswa/import', 'Admin\Siswa::import');
	$routes->post('siswa/import', 'Admin\Siswa::proses_import');
	$routes->post('siswa/view_single', 'Admin\Siswa::view_data');
	$routes->get('siswa/tahun_pelajaran', 'Admin\Settings::get_tahun_pelajaran');

	$routes->get('guru', 'Admin\Guru::index');
	$routes->get('guru/table_guru', 'Admin\Guru::get_guru');
	$routes->get('guru/import', 'Admin\Guru::import');
	$routes->post('guru/import', 'Admin\Guru::proses_import');

	$routes->get('tu/surat_keluar', 'Admin\SuratKeluar::Index');
	$routes->post('tu/surat_keluar', 'Admin\SuratKeluar::Index');
	$routes->get('tu/get_surat_keluar', 'Admin\SuratKeluar::get_surat_keluar');
	$routes->post('tu/hapus_surat_keluar', 'Admin\SuratKeluar::hapus_surat_keluar');
	$routes->post('tu/edit_surat_keluar', 'Admin\SuratKeluar::edit_surat_keluar');
	$routes->post('tu/simpan_edit_surat_keluar', 'Admin\SuratKeluar::simpan_edit_surat_keluar');

	$routes->get('tu/surat_keputusan', 'Admin\SuratKeputusan::Index');
	$routes->post('tu/surat_keputusan', 'Admin\SuratKeputusan::Index');
	$routes->get('tu/get_surat_keputusan', 'Admin\SuratKeputusan::get_surat_keputusan');
	$routes->post('tu/hapus_surat_keputusan', 'Admin\SuratKeputusan::hapus_surat_keputusan');
	$routes->post('tu/edit_surat_keputusan', 'Admin\SuratKeputusan::edit_surat_keputusan');
	$routes->post('tu/simpan_edit_surat_keputusan', 'Admin\SuratKeputusan::simpan_edit_surat_keputusan');

	$routes->get('tu/surat_extra', 'Admin\SuratExtra::Index');
	$routes->post('tu/surat_extra', 'Admin\SuratExtra::Index');
	$routes->get('tu/get_surat_extra', 'Admin\SuratExtra::get_surat_extra');
	$routes->post('tu/hapus_surat_extra', 'Admin\SuratExtra::hapus_surat_extra');
	$routes->post('tu/edit_surat_extra', 'Admin\SuratExtra::edit_surat_extra');
	$routes->post('tu/simpan_edit_surat_extra', 'Admin\SuratExtra::simpan_edit_surat_extra');
});

$routes->group('guru', ['filter' => 'admin_auth'], function ($routes) {
	$routes->get('/', 'Guru\Home::index');
	$routes->get('coba', 'Guru\Home::coba');
	$routes->post('coba_upload', 'Guru\Home::coba_upload');

	$routes->get('profile', 'Guru\Home::profile');
	$routes->post('profile', 'Guru\Home::profile');
	$routes->post('profile/upload_foto', 'Guru\Home::upload_foto');

	$routes->get('siswa', 'Guru\Siswa::index');
	$routes->get('siswa/tampilkan_siswa', 'Guru\Siswa::get_siswa');
	$routes->post('siswa/view_single', 'Guru\Siswa::view_data');
	$routes->get('siswa/tahun_pelajaran', 'Guru\Settings::get_tahun_pelajaran');

	$routes->get('tu/surat_keluar', 'Guru\SuratKeluar::Index');
	$routes->post('tu/surat_keluar', 'Guru\SuratKeluar::Index');
	$routes->post('tu/tambah_surat', 'Guru\SuratKeluar::tambah_surat');

	$routes->get('tu/get_surat_keluar', 'Guru\SuratKeluar::get_surat_keluar');
	$routes->post('tu/hapus_surat_keluar', 'Guru\SuratKeluar::hapus_surat_keluar');
	$routes->post('tu/edit_surat_keluar', 'Guru\SuratKeluar::edit_surat_keluar');
	$routes->post('tu/simpan_edit_surat_keluar', 'Guru\SuratKeluar::simpan_edit_surat_keluar');

	$routes->get('tu/surat_keputusan', 'Guru\SuratKeputusan::Index');
	$routes->post('tu/surat_keputusan', 'Guru\SuratKeputusan::Index');
	$routes->get('tu/get_surat_keputusan', 'Guru\SuratKeputusan::get_surat_keputusan');
	$routes->post('tu/hapus_surat_keputusan', 'Guru\SuratKeputusan::hapus_surat_keputusan');
	$routes->post('tu/edit_surat_keputusan', 'Guru\SuratKeputusan::edit_surat_keputusan');
	$routes->post('tu/simpan_edit_surat_keputusan', 'Guru\SuratKeputusan::simpan_edit_surat_keputusan');


	$routes->get('tu/surat_extra', 'Guru\SuratExtra::Index');
	$routes->post('tu/surat_extra', 'Guru\SuratExtra::Index');
	$routes->get('tu/get_surat_extra', 'Guru\SuratExtra::get_surat_extra');
	$routes->post('tu/hapus_surat_extra', 'Guru\SuratExtra::hapus_surat_extra');
	$routes->post('tu/edit_surat_extra', 'Guru\SuratExtra::edit_surat_extra');
	$routes->post('tu/simpan_edit_surat_extra', 'Guru\SuratExtra::simpan_edit_surat_extra');
});

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
