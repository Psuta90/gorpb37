<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
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
        // \App\Models\User::factory(10)->create();
        Admin::create([
            'name' => "admin",
            'username' => "admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make('admin'),
            // 'api_token' => Str::random(60),
        ]);
    }
}
