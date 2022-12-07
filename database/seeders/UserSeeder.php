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
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@djvaleting.fake',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('WorldTableFrogWindow'),
            'role' => 'admin'
        ]);
    }
}
