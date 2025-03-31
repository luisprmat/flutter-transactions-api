<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Category::factory()->count(5)->create();

        Category::create(['name' => 'Electronics', 'user_id' => $user->id]);
        Category::create(['name' => 'Fashion', 'user_id' => $user->id]);
        Category::create(['name' => 'Home & Garden', 'user_id' => $user->id]);
        Category::create(['name' => 'Sporting Goods', 'user_id' => $user->id]);
    }
}
