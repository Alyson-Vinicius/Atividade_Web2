<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Book;
use Faker\Factory as Faker;

class AuthorPublisherBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Criar autores e editoras e associar livros a eles
        for ($i = 0; $i < 5; $i++) {
            $author = Author::create([
                'name' => $faker->name,
                'birth_date' => $faker->date('Y-m-d', '-30 years')
            ]);

            $publisher = Publisher::create([
                'name' => $faker->company,
                'address' => $faker->address
            ]);

            // Criar livros para cada autor e editora
            for ($j = 0; $j < 3; $j++) {
                Book::create([
                    'title' => $faker->sentence(3),
                    'author_id' => $author->id,
                    'category_id' => rand(24, 25), // Assumindo que existam categorias com esses IDs
                    'publisher_id' => $publisher->id,
                    'published_year' => $faker->year
                ]);
            }
        }
    }
}
