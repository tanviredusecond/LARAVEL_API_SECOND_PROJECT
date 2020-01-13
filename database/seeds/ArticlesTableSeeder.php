<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add the faker for creating the seeder
        // Truncate the table 
        Article::truncate();
        
        $faker = \Faker\Factory::create();

        // loop through the 
        for($i=0;$i<=100;$i++){
            // create the instance
            Article::create([
                "title" => $faker->sentence,
                "body" => $faker->paragraph
            ]);
        }
    }
}
