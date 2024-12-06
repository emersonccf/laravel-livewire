<?php

namespace Database\Seeders;

use App\Models\Tweet;
use Illuminate\Database\Seeder;

class TweetSeed extends Seeder
{
    public function run(): void
    {
        Tweet::factory(5)->create();
    }
}
