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
                'email'=>'mentor1@gmail.com',
                'password' => Hash::make('12345678'),
                'name' => 'Aditya Rais',
                'avatar' => 'pp1.png',

            ],
            [
                'role'=>'0',
                'email'=>'mentor2@gmail.com',
                'password' => Hash::make('12345678'),
                'name' => 'Emilia Rizke',
                'avatar' => 'pp3.jpeg',

            ],
            [
                'role'=>'0',
                'email'=>'mentor3@gmail.com',
                'password' => Hash::make('12345678'),
                'name' => 'Roy Armando',
                'avatar' => 'pp4.jpeg',

            ],
            [
                'role'=>'1',
                'email'=>'mentee1@gmail.com',
                'password' => Hash::make('12345678'),
                'name' => 'Riska',
                'avatar' => 'pp2.png',

            ],
            [
                'role'=>'1',
                'email'=>'mentee2@gmail.com',
                'password' => Hash::make('12345678'),
                'name' => 'Hendra Aji',
                'avatar' => 'pp5.jpg',

            ],
            [
                'role'=>'1',
                'email'=>'mentee3@gmail.com',
                'password' => Hash::make('12345678'),
                'name' => 'Bramasta',
                'avatar' => 'pp6.png',
            ],
        ];
        foreach ($users as $key => $user){
            User::create($user);
        }
    }
}
