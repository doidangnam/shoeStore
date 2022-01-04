<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('admins')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'avatar' => NULL,
                'password' => bcrypt('admin'),
                'role' => '1',
                'remember_token' => '06051999',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
