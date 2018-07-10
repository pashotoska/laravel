<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CountryTableSeeder::class);
         $this->call(GenresTableSeeder::class);
         $this->call(CurrencyTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(MovieTableSeeder::class);
         $this->call(CommentTableSeeder::class);
         $this->call(GenerMovieTableSeeder::class);
    }
}
