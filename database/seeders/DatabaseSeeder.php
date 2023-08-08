<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Chat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Chat::factory(20)->create()->each(function ($chat) {
            $chat->messages()->saveMany(\App\Models\Message::factory(30)->make());
        });
    }
}
