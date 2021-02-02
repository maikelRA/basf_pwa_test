<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Recipe::insert([
            [
                'title' => "Nigerian Jollof Rice with Chicken",
                'body' => "Test Recipe. Chicken is first sauteed on the stove top to produce a wonderful aromatic base for the rice.",
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'title' => "Chicken Suya Salad",
                'body' => "- Cut the yam tuber into 1 inch slices. - Peel and cut the slices into half moons.
                            - Wash the slices, place in a pot and pour water to cover the contents.
                            - Boil till the yam is soft.",
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        ]);
    }
}
