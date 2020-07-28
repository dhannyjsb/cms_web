<?php

namespace App\Controllers;

use App\Models\Auth_model;

class Auth extends BaseController
{
	public function index()
	{
		if ($this->db_check->tableExists('user_admin')) {
			$db_ex = 1;
			if ($this->db_check->tableExists('general_tahun_pelajaran')) {
				$this->get_tahun_aktif = $this->TahunModel->tahun_sedang_aktif();
				$this->tahun_aktif = $this->get_tahun_aktif['tahun_pelajaran'];
				$data['tahun_sedang_aktif'] = $this->tahun_aktif;
			} else {
				$data['tahun_sedang_aktif'] = '0000/0000';
			}
		} else {
			$db_ex = 0;
		}

		$data['cek_db'] = $db_ex;
		$data['title'] = ucfirst('Login Form'); // Capitalize the first letter
		echo view('auth/login', $data);
	}

	public function login()
	{
		if ($this->db_check->tableExists('user_admin')) {
			$waktu_login = now('Asia/Makassar');
			//$waktu_login = date('yy-m-d H:i:s');   // Outputs: 20-01-20 17:04:00
			$model = new Auth_model();
			$data = array(
				'username' => $this->request->getPost('username'),
				'password' => $this->request->getPost('password'),
			);

			if ($this->request->getPost('mode_akun') == 1) {
				$result = $model->login($data);
				if ($result) {
					if ($result['is_active'] == 0) {
						$this->session->setFlashdata('login_warning', 'User tidak aktif.');
						return redirect()->to(base_url('login'));
					}
					if ($result['user_role_id'] == 1) {
						$admin_data = array(
							'admin_id' => $result['admin_id'],
							'username' => $result['username'],
							'user_role_id' => $result['user_role_id'],
							'is_admin_login' => TRUE,
							'is_login' => true
						);
						$data = array(
							'last_login' => $waktu_login,
							'last_ip' => $this->request->getIPAddress()
						);
						$model->save_waktu($data, $result['admin_id']);
						$this->session->set($admin_data);
						return redirect()->to(base_url('admin'));
					} else {
						$this->session->setFlashdata('login_error', 'mode salah.');
						return redirect()->to(base_url('login'));
					}
				} else {
					$this->session->setFlashdata('login_error', 'User name atau password salah.');
					return redirect()->to(base_url('login'));
				}
			}
			if ($this->request->getPost('mode_akun') == 2) {
				$result = $model->login($data);
				if ($result) {
					if ($result['is_active'] == 0) {
						$this->session->setFlashdata('login_warning', 'User tidak aktif.');
						return redirect()->to(base_url('login'));
					}
					if ($result['user_role_id'] == 2) {
						$admin_data = array(
							'admin_id' => $result['admin_id'],
							'username' => $result['username'],
							'user_role_id' => $result['user_role_id'],
							'is_guru_login' => TRUE, //kedepan ini di ganti sesuai kebutuhan
							'is_login' => true
						);
						$data = array(
							'last_login' => $waktu_login,
							'last_ip' => $this->request->getIPAddress()
						);
						$model->save_waktu($data, $result['admin_id']);
						$this->session->set($admin_data);
						return redirect()->to(base_url('guru'));
					} else {
						$this->session->setFlashdata('login_error', 'User name atau password salah.');
						return redirect()->to(base_url('login'));
					}
				} else {
					$this->session->setFlashdata('login_error', 'User name atau password salah.');
					return redirect()->to(base_url('login'));
				}
			}
			if ($this->request->getPost('mode_akun') == 3) {
				$result = $model->login($data);
				if ($result) {
					if ($result['is_active'] == 0) {
						$this->session->setFlashdata('login_warning', 'User tidak aktif.');
						return redirect()->to(base_url('login'));
					}
					if ($result['user_role_id'] == 3) {
						$admin_data = array(
							'admin_id' => $result['admin_id'],
							'username' => $result['username'],
							'user_role_id' => $result['user_role_id'],
							'is_tu_login' => TRUE, //kedepan ini di ganti sesuai kebutuhan
							'is_login' => true
						);
						$data = array(
							'last_login' => $waktu_login,
							'last_ip' => $this->request->getIPAddress()
						);
						$model->save_waktu($data, $result['admin_id']);
						$this->session->set($admin_data);
						return redirect()->to(base_url('tu'));
					} else {
						$this->session->setFlashdata('login_error', 'User name atau password salah.');
						return redirect()->to(base_url('login'));
					}
				} else {
					$this->session->setFlashdata('login_error', 'User name atau password salah.');
					return redirect()->to(base_url('login'));
				}
			}
			if ($this->request->getPost('mode_akun') == 4) {
				$result = $model->login_siswa($data);
				if ($result) {
					if ($result['is_active'] == 0) {
						$this->session->setFlashdata('login_warning', 'User tidak aktif.');
						return redirect()->to(base_url('login'));
					}
					if ($result['user_role_id'] == 4) {
						$admin_data = array(
							'user_id' => $result['user_id'],
							'username' => $result['username'],
							'user_role_id' => $result['user_role_id'],
							'is_siswa_login' => TRUE,
							'is_login' => true
						);
						$data = array(
							'last_login' => $waktu_login,
							'last_ip' => $this->request->getIPAddress()
						);
						$model->save_waktu($data, $result['user_id']);
						$this->session->set($admin_data);
						return redirect()->to(base_url('siswa'));
					}
				} else {
					$this->session->setFlashdata('login_error', 'User name atau password salah.');
					return redirect()->to(base_url('login'));
				}
			}
			if ($this->request->getPost('mode_akun') == 5) {
				$this->session->setFlashdata('login_warning', 'Fungsi alumni belum aktif');
				return redirect()->to(base_url('login'));
			}
			if ($this->request->getPost('mode_akun') == 6) {
				$this->session->setFlashdata('login_warning', 'Fungsi umum belum aktif');
				return redirect()->to(base_url('login'));
			}
		} else {
			$this->session->setFlashdata('no_db', 'Table tidak ditemukan.');
			return redirect()->to(base_url('login'));
		}
	}

	public function logout()
	{
		$this->session->destroy();
		return redirect()->to(base_url());
	}
	public function first_init_system()
	{
		if ($this->db_check->tableExists('user_admin')) {
			return redirect()->to(base_url('login'));
		} else {
			$migrate = \Config\Services::migrations();
			try {
				$migrate->latest();
				$seeder = \Config\Database::seeder();
				$seeder->call('Init_seed');
				$this->session->setFlashdata('buat_db', 'Table berhasil dibuat.');
				return redirect()->to(base_url('login'));
			} catch (\Exception $e) {
				echo 'error';
			}
		}
	}
}
