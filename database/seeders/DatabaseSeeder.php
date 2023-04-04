<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
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
        $kedrar = User::factory()->create(['name' => 'kedrar', 'username' => 'kedrar']);
        $johnson = User::factory()->create(['name' => 'johnson', 'username' => 'johnson']);

        $frontend = Category::factory()->create(['name' => 'frontend', 'slug' => 'frontend']);
        $backend = Category::factory()->create(['name' => 'backend', 'slug' => 'backend']);

        Blog::factory(2)->create(['category_id' => $frontend->id, 'user_id' => $kedrar->id]);
        Blog::factory(2)->create(['category_id' => $backend->id, 'user_id' => $johnson->id]);
    
    }
}
