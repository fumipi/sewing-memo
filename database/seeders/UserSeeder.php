<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ann Rowley',
            'email' => 'ann@example.com',
            'password' => Hash::make('password'),
          ]);
          User::create([
            'name' => 'Heather Jacks',
            'email' => 'heather@example.com',
            'password' => Hash::make('password'),
          ]);
          User::create([
            'name' => 'Matt Chapple',
            'email' => 'matt@example.com',
            'password' => Hash::make('password'),
          ]);
          User::create([
            'name' => 'Charlotte Newland',
            'email' => 'charlotte@example.com',
            'password' => Hash::make('password'),
          ]);
    }
}
