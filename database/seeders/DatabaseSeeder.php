<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            AuthorPublisherBookSeeder::class,
            UserBorrowingSeeder::class,
        ]);
    }
    

    

    
}

