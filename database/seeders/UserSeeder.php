<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role_id' => '1',
            'address' => 'Uzbekistan',
            'phones' => '902299389',
            'password' => Hash::make('secret12'),
        ]);
    }
}
