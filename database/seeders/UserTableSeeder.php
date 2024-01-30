<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            'name'=>'Admin',
            'role'=>'admin',
            'email'=>'admin@gmail.com',
            'phone'=>'01772195188',
            'address'=>'Tangail',
            'password'=>bcrypt('123456'),
        ]);
    }
}
