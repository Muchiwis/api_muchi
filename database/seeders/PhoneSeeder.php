<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phone::create([
            "prefix" => 51,
            "phone_number" => 931858130,
            "user_id" => 1,
        ]);
        Phone::create([
            "prefix" => 61,
            "phone_number" => 985368415,
            "user_id" => 2,
        ]);
        Phone::create([
            "prefix" => 61,
            "phone_number" => 985368415,
            "user_id" => 2,
        ]);
        Phone::create([
            "prefix" => 61,
            "phone_number" => 954126874,
            "user_id" => 2,
        ]);
        Phone::create([
            "prefix" => 64,
            "phone_number" => 985471125,
            "user_id" => 1,
        ]);
    }
}
