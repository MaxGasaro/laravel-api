<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Antipasti', 'Primi', 'Secondi', 'Contorni', 'Dolci'];

        foreach($categories as $category) {
            $newCategory = new Category();

            $newCategory->name = $category;
            $newCategory->slug = Str::slug($category);

            $newCategory->save();
        }
    }
}