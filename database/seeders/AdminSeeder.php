<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$MoWX1xa0S9kGG5YvE4ShCOBmoHQNeTb5I1VlEvS1RtTcOi/2eXMLG', // password
        ])->assignRole('admin','photographer','user');
    }
}
