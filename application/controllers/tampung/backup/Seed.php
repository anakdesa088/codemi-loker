<?php
use Faker\Factory;
class Seed extends CI_Controller
{
    public function index()
    {
        $faker = Faker\Factory::create();
        for ($i=1; $i <= 100; $i++) 
        { 
            $data[] = [
                'nama_lengkap'      => $faker->name,
                'email'             => $faker->email,
                'password'          => $this->getPasswordWithPrefix('12345678'),
                'kewarganegaraan'   => $faker->randomElement($array = array ('WNA','WNI')),
                'jk'                => $faker->randomElement($array = array ('P','L')),
                'tinggi_badan'      => $faker->numberBetween($min = 100, $max = 250),
                'berat_badan'       => $faker->numberBetween($min = 50, $max = 250),
                'alamat'            => $faker->address,
                'kode_pos'          => $faker->randomNumber($nbDigits = 5, $strict = false),
                'tmpt_lahir'        => $faker->city,
                'tgl_lahir'         => $faker->date($format = 'Y-m-d', $max = 'now'),
                'nama_ayah'         => $faker->name,
                'nama_ibu'          => $faker->name,
                'no_hp1'            => $faker->e164PhoneNumber,
                'no_hp2'            => $faker->e164PhoneNumber,
                'info_dari'         => $faker->randomElement($array = array ('Teman','Keluarga','Media Daring','Lain-lain')),
                'nama_asal_sekolah'     => $faker->name,
                'alamat_asal_sekolah'   => $faker->address,
                'foto_diri'         => 'photo_2019-02-06_15-15-12.jpg',
                'foto_ijazah'       => 'photo_2019-02-06_15-15-12.jpg',
                'foto_kesehatan'    => 'photo_2019-02-06_15-15-12.jpg',
                'validasi_pembayaran'   => '1',
                'first_time_login'  => '1',
                'level'             => 'pmb_baru',
                'is_active'         => '1',
                'tahun_ajaran_id_tahun_ajaran'  => '1',
                'status_data'       => '1',
            ];
        }
        // echo "<pre>";
        $this->db->trans_start();
        $this->db->insert_batch('pmb',$data);
        $this->db->trans_complete();
        return var_dump($this->db->trans_status());
    }
	private function getPasswordWithPrefix($raw_password)
	{
		$this->config->load('setting');
		$prefix = $this->config->item('password_prefix','security');
		$new_pass = sprintf("%s%s",$prefix,$raw_password);
		return password_hash($new_pass,PASSWORD_DEFAULT);
	}
}
