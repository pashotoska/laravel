<?php

use Illuminate\Database\Seeder;

class GenerMovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("movie_genres")->insert([
            ["movie_id"=>1,"genre_id"=>1],
            ["movie_id"=>1,"genre_id"=>2],
            ["movie_id"=>1,"genre_id"=>3],
            ["movie_id"=>2,"genre_id"=>4],
            ["movie_id"=>3,"genre_id"=>5]
        ]);
    }
}
