<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'telepon' => '08999999999',
            'level' => 'admin',
            'image' => 'default.png',
            'is_active' => 'Y',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'Anggota',
            'email' => 'anggota@anggota.com',
            'username' => 'anggota',
            'telepon' => '08111111111',
            'level' => 'anggota',
            'image' => 'default.png',
            'is_active' => 'Y',
            'password' => bcrypt('anggota'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'Bendahara',
            'email' => 'bendahara@bendahara.com',
            'username' => 'bendahara',
            'telepon' => '087777777',
            'level' => 'bendahara',
            'image' => 'default.png',
            'is_active' => 'Y',
            'password' => bcrypt('bendahara'),
            'remember_token' => Str::random(60),
        ]);
    }
}
