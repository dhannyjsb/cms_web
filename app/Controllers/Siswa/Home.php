<?php

namespace App\Controllers\Siswa;

class Home extends SiswaBaseController
{
	public function index()
	{
		//$data['tahun_sedang_aktif'] = $this->tahun_aktif;
		$data['tahun_sedang_aktif'] = $this->tahun_aktif;
		$data['user_info'] = $this->user_name;
		$data['settings'] = $this->SettingsModel->get_settings_id();

		$data['title'] = ucfirst('dashboard'); // Capitalize the first letter
		$data['view'] = 'dashboard/siswa/index';
		$data['data_siswa'] = $this->DataSiswaModel->get_total_siswa($this->tahun_aktif);
		$data['total_kelas'] = $this->DataSiswaModel->get_total_kelas($this->tahun_aktif);
		$data['semua_kelas'] = $this->DataSiswaModel->ambil_rombel($this->tahun_aktif);
		//dd($data);
		return view('dashboard/layout', $data);
	}

	//	public function table_rombel()
	//	{
	//		$data = $this->DataSiswaModel->get_total_kelas($this->tahun_aktif);
	//		echo json_encode($data);
	//	}

	public function profile()
	{
		if ($this->request->isAJAX()) {
			$data = array(
				'firstname' => $this->request->getPost('firstname'),
				'lastname' => $this->request->getPost('lastname'),
				'tahun_lahir' => $this->request->getPost('dateMask'),
				'email' => $this->request->getPost('email'),
				'mobile_no' => $this->request->getPost('mobile_no'),
				'website' => $this->request->getPost('website'),
				'alamat' => $this->request->getPost('alamat'),
				'twitter' => $this->request->getPost('twitter'),
				'facebook' => $this->request->getPost('facebook'),
				'instagram' => $this->request->getPost('instagram'),
				'linkedin' => $this->request->getPost('linkedin'),
			);
			$this->UserAdminModel->save_profile($data, $this->admin_id);
		}
		$data['tahun_sedang_aktif'] = $this->tahun_aktif;
		$data['user_info'] = $this->user_name;
		$data['settings'] = $this->SettingsModel->get_settings_id();
		$data['admin_roles'] = $this->RolesModel->get_admin_roles();
		$data['title'] = ucfirst('Profile ' . $this->user_name['firstname'] . ' ' . $this->user_name['lastname']); // Capitalize the first letter
		$data['view'] = 'dashboard/admin/profile';

		return view('dashboard/layout', $data);
	}
	public function upload_foto()
	{
		if ($this->request->isAJAX()) {
			$validated = $this->validate([
				'file' => [
					'uploaded[file]',
					'mime_in[file,image/jpg,image/jpeg,image/png]',
					'max_size[file,2048]',
				],
			]);

			if ($validated) {
				$avatar = $this->request->getFile('file');
				$newName = $avatar->getRandomName();
				$avatar->move(ROOTPATH  . 'public/app-assets/images/profile/guru-admin-upload/', $this->user_name['admin_id'] . "-" . $newName);
				$data = [
					'image' =>  $this->user_name['admin_id'] . "-" . $newName,
				];
				$this->UserAdminModel->save_profile($data, $this->admin_id);
				echo TRUE;
			} else {
				echo  FALSE;
			}
		}
	}
}
