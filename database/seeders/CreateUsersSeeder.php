<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'role'=>'0',
                'email'=>'mentee@gmail.com',
                'password' => Hash::make('12345678'),

            ],
            [
                'role'=>'1',
                'email'=>'mentor@gmail.com',
                'password' => Hash::make('12345678'),

            ],
        ];
        foreach ($users as $key => $user){
            User::create($user);
        }
    }
}
