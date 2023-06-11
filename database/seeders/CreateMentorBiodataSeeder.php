<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\biodata_mentor;

class CreateMentorBiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biodata_mentor = [
            [
                'foto' => "foto/pp1.png",
                'username' => "Aditya Rais",
                'jenis_kelamin' => 1,
                'tentang' => "Alumni UGM, pegawai di Mamikos",
                'tempat_tinggal'=> "Malang, Jawa Timur",
                'pekerjaan' => 2,
                'instansi' => "Mamikos",
                'telepon' => "0812345678",
                'bidang' => "Web Developer",
                'jadwal' => ["1", "16:00"],
                'portofolio' => "portofolio/cv.png",
                'user_id' => 1,
            ],
            [
                'foto' => "foto/pp3.jpeg",
                'username' => "Emilia Rizke",
                'jenis_kelamin' => 2,
                'tentang' => "Alumni UI, pegawai di Shopee",
                'tempat_tinggal'=> "Jakarta, Jawa Barat",
                'pekerjaan' => 2,
                'instansi' => "Shopee",
                'telepon' => "0812345678",
                'bidang' => "Web Developer",
                'jadwal' => ["2", "15:00"],
                'portofolio' => "portofolio/cv.png",
                'user_id' => 2,
            ],
            [
                'foto' => "foto/pp4.jpeg",
                'username' => "Roy Armando",
                'jenis_kelamin' => 1,
                'tentang' => "Alumni UI, karyawan di Gojek",
                'tempat_tinggal'=> "Jakarta, Jawa Barat",
                'pekerjaan' => 3,
                'instansi' => "Gojek",
                'telepon' => "0812345678",
                'bidang' => "Cloud Computing Engineer",
                'jadwal' => ["1", "10:00"],
                'portofolio' => "portofolio/cv.png",
                'user_id' => 3,
            ],
        ];
        foreach ($biodata_mentor as $key => $biodata_mentor){
            biodata_mentor::create($biodata_mentor);
        }
    }
}
