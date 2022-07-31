<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            'name' => 'Admin',
            'description' => 'Administrate all the activities of the site.',
            'status' => 1,
        ]);

        Role::insert([
            'name' => 'Normal',
            'description' => 'Default role for users outside the organization.',
            'status' => 1,
        ]);
    }
}
