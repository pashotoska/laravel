<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Slug;
class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug= new Slug();
        DB::table('movies')->insert([
            ["user_id"=>1,"name"=>"The Dark Knight","slug"=> $slug->createSlug("The Dark Knight",1,"movie"),"description"=>"When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham. The Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.","rate"=>4.5,"release_date"=>"2008-07-18","ticket_price"=>10,"currency_id"=>147,"country_id"=>227,"photo"=>"/uploads/the-dark-knight.jpg",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ["user_id"=>1,"name"=>"Avengers: Infinity War","slug"=> $slug->createSlug("Avengers: Infinity War",2,"movie"),"description"=>"The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.","rate"=>4.35,"release_date"=>"2018-04-27","ticket_price"=>10,"currency_id"=>147,"country_id"=>227,"photo"=>"/uploads/avengers-infinity-war.jpg",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ["user_id"=>1,"name"=>"The Shawshank Redemption","slug"=>$slug->createSlug("The Shawshank Redemption",3,"movie"),"description"=>"Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.","rate"=>4.65,"release_date"=>"1994-10-14","ticket_price"=>10,"currency_id"=>147,"country_id"=>227,"photo"=>"/uploads/the-shawshank-redemption.jpg",'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);    
    }
}
