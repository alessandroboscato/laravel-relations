<?php

use Illuminate\Database\Seeder;
use App\AuthorInfo;
use App\Author;
use Faker\Generator as Faker;

class AuthorsInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      $totalAuthors = Author::all();

      for ($i = 0; $i< $totalAuthors->count(); $i++){
        $newInfo = new AuthorInfo;
        $newInfo->nationality = $faker->country;
        $newInfo->biography = $faker->text(1000);
        $newInfo->photo = $faker->imageUrl(200,300);
        $newInfo->total_production = rand(1,50);
        $newInfo->author_id = $i + 1;
        $newInfo->save();
      }
    }
}
