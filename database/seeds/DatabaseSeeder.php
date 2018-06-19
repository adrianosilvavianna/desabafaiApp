<?php

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
        factory(\App\User::class, 10)->create();
        factory(\App\Models\Category::class, 5)->create();
        factory(\App\Models\Question::class, 15)->create();
        factory(\App\Models\Reply::class, 25)->create()->each(function ($reply){

            return $reply->like()->save(factory(\App\Models\Like::class)->make());

        });
    }
}
