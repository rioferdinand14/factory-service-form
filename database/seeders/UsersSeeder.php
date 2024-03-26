<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::connection('cksql')->table('users')->insert([
            'name' => 'Rio Ferdinand',
            'username' => 'ferdinand',
            'password' => Hash::make('password'), 
            'email' => 'rio@gmail.com',
            'type' => '2' // Bcrypt hashing
        ]);
        DB::connection('cksql')->table('users')->insert([
            'name' => 'Thom Yorke',
            'username' => 'radiohead',
            'password' => Hash::make('gkaget'), // Bcrypt hashing
            'email' => 'radio@gmail.com',
            'type' => '3'
        ]);
    }
}
