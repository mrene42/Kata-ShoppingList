<?php

namespace Database\Seeders;

use App\Models\Item;
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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Item::create([
            'name' => 'Sheets',
            'category' => 'Home',
        ]);

        Item::create([
            'name' => 'Oranges',
            'category' => 'Food',
        ]);

        Item::create([
            'name' => 'Shirt',
            'category' => 'Fashion',
        ]);

        Item::create([
            'name' => 'Phone',
            'category' => 'Electronics',
        ]);

        Item::create([
            'name' => 'Sunglasses',
            'category' => 'Other',
        ]);
    }
}
