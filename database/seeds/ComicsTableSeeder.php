<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

      for ($i = 0; $i < 10; $i++) {

        $newComic = new Comic;
        $newComic->title = $faker->text(30);
        $newComic->editor = $faker->company(50);
        $newComic->edition = $faker->sentence(3);
        $newComic->year = $faker->year('now');
        $newComic->number = $faker->numberBetween(1, 2000);
        $newComic->pages = $faker->numberBetween(30, 500);
        $newComic->lecture = (rand(0,1) == 1) ? "rtl" : "ltr";
        $newComic->coloured = rand(0,1);
        $newComic->barcode = $faker->isbn13();
        $newComic->price = $faker->randomFloat(2,1,9999.99);
        $newComic->cover = $faker->imageUrl(300);
        $newComic->text = $faker->realText(500);
        $newComic->save();
      }

    }
  }
