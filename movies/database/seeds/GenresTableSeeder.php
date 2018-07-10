<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('genres')->insert([
            ["name"=>"Biography"],
            ["name"=>"Comedy"],
            ["name"=>"Drama"],
            ["name"=>"Educational"],
            ["name"=>"Fantasy"],
            ["name"=>"History"],
            ["name"=>"Horror"],
            ["name"=>"Martial arts"],
            ["name"=>"Nature"],
            ["name"=>"Romance"],
            ["name"=>"Science"],
            ["name"=>"Western"],
            ["name"=>"Action"],
            ["name"=>"Aventure"]
        ]);
    }
}
