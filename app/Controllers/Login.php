<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\User;

class Login extends BaseController
{

	protected $user;

	public function __construct()
	{
		$this->user = new User();
	}

	public function index()
	{
		return view('login');
	}

	public function cek_login()
	{
		$username = htmlspecialchars($this->request->getVar('username'));
		$password = htmlspecialchars(md5($this->request->getVar('password')));
		$cek_baris = $this->user->where(['username' => $username, 'password' => $password])->countAllResults();
		$akun = $this->user->where(['username' => $username, 'password' => $password])->first();
		if ($cek_baris == 0) {
			session()->setFlashdata('pesan', 'Username & Password Salah');
			return redirect()->to('/login');
		} else {
			$_SESSION['admin'] = $akun;
			return redirect()->to('/admin/');
		}
	}

	public function log_out()
	{
		session_destroy();
		return redirect()->to('/login');
	}
}
