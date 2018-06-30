<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $genres = [
            "Hardstyle",
            "Hardcore",
            "Rawstyle",
            "Euphoric Hardstyle",
            "Dubstyle",
            "Psystyle",
            "Hard Trance",
            "Dubstep",
        ];

        foreach ($genres as $genre) {
            \App\Genre::create([
                "name" => $genre
            ]);
        }

    }
}
