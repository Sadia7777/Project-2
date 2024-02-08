<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
            [
                'name' => 'Sadia',
                'email' => 'sadiaakter5732@gmail.com',
                'password' =>  bcrypt('12345678'),
            ],
           ];
           User::insert($users);
    }
}
