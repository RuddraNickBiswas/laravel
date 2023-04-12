<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'username' => "admin",
            'company' => 'ABC company',
            'email' => "admin@gmail.com", 'email_verified_at' => Carbon::now()->subDays(rand(1, 30)),
            'password' => Hash::make("12345678"),
        ]);
    }
}
