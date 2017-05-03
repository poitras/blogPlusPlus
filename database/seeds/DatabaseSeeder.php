<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nicolas Poitras',
            'email' => 'nicopoitras@gmail.com',
            'password' => bcrypt('sphere'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        factory(App\User::class, 9)->create();
        factory(App\Post::class, 5)->create();
    }
}
