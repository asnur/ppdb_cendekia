<?php

namespace App\Models;

use CodeIgniter\Model;

class Ppdb extends Model
{
	protected $table                = 'pendaftaran';
	protected $allowedFields        = ['nama', 'jenis_kelamin', 'nik', 'tempat_lahir', 'tanggal_lahir', 'kewarganegaraan', 'alamat', 'tinggal', 'anak_ke', 'usia'];
}
