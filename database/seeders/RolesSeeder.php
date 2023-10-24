<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            "id" => 1,
            "name" => "admin" 
        ]);
        Role::create([
            "id" => 2,
            "name" => "invitado" 
        ]);
        Role::create([
            "id" => 3,
            "name" => "testing" 
        ]);

        DB::table('roles_user')->insert([
            'user_id' => 1,
            'rol_id' => 1,
            'add_by' => "Jhord",
        ]);
        DB::table('roles_user')->insert([
            'user_id' => 1,
            'rol_id' => 2,
            'add_by' => "Cristian",
        ]);
        DB::table('roles_user')->insert([
            'user_id' => 1,
            'rol_id' => 3,
            'add_by' => "Susan",
        ]);
        DB::table('roles_user')->insert([
            'user_id' => 2,
            'rol_id' => 2,
            'add_by' => "Mishell",
        ]);
        DB::table('roles_user')->insert([
            'user_id' => 2,
            'rol_id' => 1,
            'add_by' => "Lorena",
        ]);
    }
}
