<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => "Jhord",
        //     'email' => "jhordcristian75@gmail.com",
        //     'password' => Hash::make(123456),
        // ]);
        // User::create([
        //     'name' => "Cristian",
        //     'email' => "cristian@gmail.com",
        //     'password' => Hash::make(123456),
        // ]);
    }
}
