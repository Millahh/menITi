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
                'tentang' => "Alumni UGM, pegawai part time di Mamikos",
                'tempat_tinggal'=> "Malang, Jawa Timur",
                'pekerjaan' => 2,
                'instansi' => "Mamikos",
                'telepon' => "0812345678",
                'bidang' => 2,
                'jadwal' => ["1", "16:00"],
                'portofolio' => "portofolio/cv.png",
                'user_id' => 1,
                'calon_mentee' => "0",
                'mentee' => "0",
                'rating_review' => [
                    'rating' => 0,
                    'review' => null,
                    'nama'   => null,
                ],
            ],
            [
                'foto' => "foto/pp3.webp",
                'username' => "Emilia Rizke",
                'jenis_kelamin' => 2,
                'tentang' => "Alumni UI, pegawai di Shopee",
                'tempat_tinggal'=> "Jakarta, Jawa Barat",
                'pekerjaan' => 2,
                'instansi' => "Shopee",
                'telepon' => "0812345678",
                'bidang' => 2,
                'jadwal' => ["2", "15:00"],
                'portofolio' => "portofolio/cv.png",
                'user_id' => 2,
                'calon_mentee' => "0",
                'mentee' => "0",
                'rating_review' => [
                    'rating' => 0,
                    'review' => null,
                    'nama'   => null,
                ],
            ],
            [
                'foto' => "foto/pp4.webp",
                'username' => "Roy Armando",
                'jenis_kelamin' => 1,
                'tentang' => "Alumni UI, karyawan di Gojek",
                'tempat_tinggal'=> "Jakarta, Jawa Barat",
                'pekerjaan' => 3,
                'instansi' => "Gojek",
                'telepon' => "0812345678",
                'bidang' => 3,
                'jadwal' => ["1", "10:00"],
                'portofolio' => "portofolio/cv.png",
                'user_id' => 3,
                'calon_mentee' => "0",
                'mentee' => "0",
                'rating_review' => [
                    'rating' => 0,
                    'review' => null,
                    'nama'   => null,
                ],
            ],
        ];
        foreach ($biodata_mentor as $key => $biodata_mentor){
            biodata_mentor::create($biodata_mentor);
        }
    }
}
