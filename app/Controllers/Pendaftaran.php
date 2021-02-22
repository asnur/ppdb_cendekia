<?php

namespace App\Controllers;

use App\Models\Ppdb;

class Pendaftaran extends BaseController
{
    protected $pendaftaran;

    public function __construct()
    {
        $this->pendaftaran = new Ppdb();
    }

    public function index()
    {
        return view('form');
    }

    public function daftar()
    {
        $this->pendaftaran->save([
            'nama' => htmlspecialchars($this->request->getVar('nama')),
            'jenis_kelamin' => htmlspecialchars($this->request->getVar('jenis_kalamin')),
            'nik' => htmlspecialchars($this->request->getVar('nik')),
            'tempat_lahir' => htmlspecialchars($this->request->getVar('tempat_lahir')),
            'tanggal_lahir' => htmlspecialchars($this->request->getVar('tgl_lahir')),
            'kewarganegaraan' => htmlspecialchars($this->request->getVar('kewarganegaraan')),
            'alamat' => htmlspecialchars($this->request->getVar('alamat')),
            'tinggal' => htmlspecialchars($this->request->getVar('tinggal')),
            'anak_ke' => htmlspecialchars($this->request->getVar('anak_ke')),
            'usia' => htmlspecialchars($this->request->getVar('usia'))
        ]);
        session()->setFlashdata('pesan', 'Pendaftaran Berhasil');
        return redirect()->to('/');
    }
}
