<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
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
        Post::factory(10)
            ->for(Category::factory())
            ->has(Tag::factory()->count(2))
            ->create();

        Category::factory(10)->create();
    }
}
