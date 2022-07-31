<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@laravel.com',
            'password' => Hash::make('admin'),
            'role_id' => 1,
            'status' => 1,
        ]);
    }
}
