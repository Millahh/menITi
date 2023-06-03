<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\biodata_mentee;
use App\Models\biodata_mentor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CreateUsersSeeder::class,
            CreateMentorBiodataSeeder::class,
            CreateMenteeBiodataSeeder::class,
        ]);
    }
}
