<?php

namespace Database\Seeders;

use App\Models\{Category, Tag};
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cats = Category::all();

        foreach ($cats as $cat) {

            $random = rand(1, 5);

            Tag::factory()
                ->for($cat, 'category')
                ->count($random)
                ->create();
        }
    }
}
