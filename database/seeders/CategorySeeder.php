<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Romance';
        $category->save();

        $category = new Category();
        $category->name = 'History';
        $category->save();

        $category = new Category();
        $category->name = 'Crime & Thriller';
        $category->save();

        $category = new Category();
        $category->name = 'Computing';
        $category->save();

        $category = new Category();
        $category->name = 'Business';
        $category->save();

        $category = new Category();
        $category->name = "Children's Books";
        $category->save();
    }
}
