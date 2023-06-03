<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\biodata_mentee;

class CreateMenteeBiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biodata_mentee = [
            [
                'foto' => "foto/pp2.png",
                'username' => "Riska",
                'jenis_kelamin' => 1,
                'tentang' => "Mahasiswa jurusan Sistem Informasi, UI/UX Research Enthusiast.",
                'tempat_tinggal'=> "Malang, Jawa Timur",
                'pekerjaan' => 2,
                'instansi' => "UB",
                'telepon' => "0812345678",
                'minat' => 2,
                'portofolio' => "portofolio/cv.png",
                'user_id' => 4,
                'calon_mentor' => "0",
                'mentor' => "0",
            ],
            [
                'foto' => "foto/pp5.jpg",
                'username' => "Hendra Aji",
                'jenis_kelamin' => 2,
                'tentang' => "Mahasiswa FILKOM UB semester 5, tertarik mendalami bidang UI/UX dan memiliki dedikasi yang tinggi dalam belajar.",
                'tempat_tinggal'=> "Jakarta, Jawa Barat",
                'pekerjaan' => 2,
                'instansi' => "UB",
                'telepon' => "0812345678",
                'minat' => 2,
                'portofolio' => "portofolio/cv.png",
                'user_id' => 5,
                'calon_mentor' => "0",
                'mentor' => "0",
            ],
            [
                'foto' => "foto/pp6.webp",
                'username' => "Bramasta",
                'jenis_kelamin' => 2,
                'tentang' => "Mahasiswa jurusan Sistem Informasi, UI/UX Research Enthusiast.",
                'tempat_tinggal'=> "Jakarta, Jawa Barat",
                'pekerjaan' => 3,
                'instansi' => "UB",
                'telepon' => "0812345678",
                'minat' => 3,
                'portofolio' => "portofolio/cv.png",
                'user_id' => 6,
                'calon_mentor' => "0",
                'mentor' => "0",
            ],
        ];
        foreach ($biodata_mentee as $key => $biodata_mentee){
            biodata_mentee::create($biodata_mentee);
        }
    }
}

