<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create(
            [
                'name' => 'vaneath',
                'email' => 'vaneath@gmail.com',
                'role' => 'admin',
            ]
        );

        User::factory(1)->create(
            [
                'name' => 'pich',
                'email' => 'pich@gmail.com',
                'role' => 'user',
            ]
        );
    }
}
