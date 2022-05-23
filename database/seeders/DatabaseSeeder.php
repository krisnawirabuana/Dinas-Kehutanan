<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert(
            [
                'id' => 1,
                'name' => 'User Biasa',
                'email' => 'user@mail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10)
            ],
            [
                'id' => 2,
                'name' => 'Penelaah Berkas',
                'email' => 'berkas@mail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10)
            ],
            [
                'id' => 3,
                'name' => 'PBPHH',
                'email' => 'pbphh@mail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10)
            ],
            [
                'id' => 4,
                'name' => 'Kabid PHPL',
                'email' => 'phpl@mail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10)
            ],
            [
                'id' => 5,
                'name' => 'Kepala Dinas',
                'email' => 'kadin@mail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10)
            ]
        );
    }
}
