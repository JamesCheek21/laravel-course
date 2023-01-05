<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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

        $user = \App\Models\User::factory()->create(['name' => 'John Doe', 'email' => 'john@gmail.com']);

        \App\Models\Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
    }
}
