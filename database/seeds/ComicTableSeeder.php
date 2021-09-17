<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = [
            [
                'title' => "Zanardi",
                'author' => "Andrea Pazienza",
                'year' => 1983,
                'description' => "In this graphic novel, presented in English for the first time, the Italian “Crumb” portrays a lost generation of late 1970s/early 1980s teenagers coping with family problems, school, sex, and drugs. A true visionary, with a fluid line and an uncanny sense of color and composition, Pazienza’s innovative graphic style served up stories that were iconoclastic, outrageous, humorous, and deeply personal, often based on himself and his microcosm of friends and collaborators. Pazienza was a revolutionary cartoonist who ushered an underground sensibility to Italian and European comics, breaking from the more staid tradition of genteel adult (and children’s) graphic albums.",
                'price' => 13.50
            ]
        ];

        foreach($comics as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->author = $comic['author'];
            $newComic->year = $comic['year'];
            $newComic->description = $comic['description'];
            $newComic->price = $comic['price'];
            $newComic->save();
        }

    }
}
