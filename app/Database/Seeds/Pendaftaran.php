<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pendaftaran extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');
		for ($i = 1; $i <= 8; $i++) {
			$data = [
				'nama' => $faker->name,
				'jenis_kelamin' => 'Perempuan',
				'nik' => $faker->randomNumber,
				'tempat_lahir' => $faker->city,
				'tanggal_lahir' => $faker->date('Y-m-d'),
				'kewarganegaraan' => 'WNI',
				'alamat' => $faker->address,
				'tinggal' => $faker->city,
				'anak_ke' => $faker->randomDigit,
				'usia' => $faker->randomDigit,
				'tanggal_daftar' => $faker->date('Y-m-d')
			];
			$this->db->table('pendaftaran')->insert($data);
		}
	}
}
