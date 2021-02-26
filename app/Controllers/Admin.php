<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Ppdb;

class Admin extends BaseController
{

	protected $siswa;

	public function __construct()
	{
		$this->siswa = new Ppdb();
	}

	public function index()
	{
		if (!isset($_SESSION['admin'])) {
			return redirect()->to('/login');
		} else {
			$data = [
				'siswa_l' => $this->siswa->where(['jenis_kelamin' => 'Laki-Laki'])->countALlResults(),
				'siswa_p' => $this->siswa->where(['jenis_kelamin' => 'Perempuan'])->countALlResults(),
				'siswa' => $this->siswa->findAll()
			];
			// dd($this->siswa->where(['jenis_kelamin' => 'Laki-Laki'])->countALlResults());
			return view('admin/home', $data);
		}
	}

	public function siswa()
	{
		if (!isset($_SESSION['admin'])) {
			return redirect()->to('/login');
		} else {
			$data = [
				'siswa' => $this->siswa->findAll()
			];
			// dd($this->siswa->where(['jenis_kelamin' => 'Laki-Laki'])->countALlResults());
			return view('admin/siswa', $data);
		}
	}

	public function tambah_siswa()
	{
		return view('admin/tambah/siswa');
	}

	public function save_tambah_siswa()
	{
		if (!isset($_SESSION['admin'])) {
			return redirect()->to('/login');
		} else {
			$this->siswa->save([
				'nama' => htmlspecialchars($this->request->getVar('nama')),
				'jenis_kelamin' => htmlspecialchars($this->request->getVar('jenis_kalamin')),
				'nik' => htmlspecialchars($this->request->getVar('nik')),
				'tempat_lahir' => htmlspecialchars($this->request->getVar('tempat_lahir')),
				'tanggal_lahir' => htmlspecialchars($this->request->getVar('tgl_lahir')),
				'kewarganegaraan' => htmlspecialchars($this->request->getVar('kewarganegaraan')),
				'alamat' => htmlspecialchars($this->request->getVar('alamat')),
				'tinggal' => htmlspecialchars($this->request->getVar('tinggal')),
				'anak_ke' => htmlspecialchars($this->request->getVar('anak_ke')),
				'usia' => htmlspecialchars($this->request->getVar('usia')),
				'tanggal_daftar' => date('Y-m-d')
			]);
			session()->setFlashdata('pesan', 'Pendaftaran Berhasil');
			return redirect()->to('/admin/siswa');
		}
	}

	public function edit_siswa($id = '')
	{
		if (!isset($_SESSION['admin'])) {
			return redirect()->to('/login');
		} else {
			$data = [
				'siswa' => $this->siswa->where(['id' => $id])->first()
			];
			return view('admin/edit/siswa', $data);
		}
	}

	public function save_edit_siswa()
	{
		if (!isset($_SESSION['admin'])) {
			return redirect()->to('/login');
		} else {
			$this->siswa->save([
				'id' => htmlspecialchars($this->request->getVar('id')),
				'nama' => htmlspecialchars($this->request->getVar('nama')),
				'jenis_kelamin' => htmlspecialchars($this->request->getVar('jenis_kalamin')),
				'nik' => htmlspecialchars($this->request->getVar('nik')),
				'tempat_lahir' => htmlspecialchars($this->request->getVar('tempat_lahir')),
				'tanggal_lahir' => htmlspecialchars($this->request->getVar('tgl_lahir')),
				'kewarganegaraan' => htmlspecialchars($this->request->getVar('kewarganegaraan')),
				'alamat' => htmlspecialchars($this->request->getVar('alamat')),
				'tinggal' => htmlspecialchars($this->request->getVar('tinggal')),
				'anak_ke' => htmlspecialchars($this->request->getVar('anak_ke')),
				'usia' => htmlspecialchars($this->request->getVar('usia')),
				'tanggal_daftar' => date('Y-m-d')
			]);
			session()->setFlashdata('pesan', 'Edit Berhasil');
			return redirect()->to('/admin/siswa');
		}
	}

	public function hapus_siswa($id = '')
	{
		if (!isset($_SESSION['admin'])) {
			return redirect()->to('/login');
		} else {
			$this->siswa->delete($id);
			session()->setFlashdata('pesan', 'Hapus Berhasil');
			return redirect()->to('/admin/siswa');
		}
	}
}
