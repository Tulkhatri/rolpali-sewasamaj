<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Rolpali Sewasamaj',
            'phone' => '9847862779',
            'email' => 'adminrolpa@gmail.com',
            'address' => 'Rolpa',
            'image' => '',
            'password' => Hash::make('rol21pa')
        ]);
    }
}
