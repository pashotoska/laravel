<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Movie;

Route::get('/', function () {
    return redirect('/films');
});

Route::get("/films",function(){
    return view("movies.index");
});
Route::get("/films/{slug}",function($slug){
    $movie = Movie::where('slug','=',$slug)->first();
    $movie->genre();
    $m = $movie->toArray();
    $m["user"] = $movie->user;
    $m["country"] = $movie->country;
    $m["currency"] = $movie->currency;
    $m["comments"] = $movie->comments;
    foreach($m["comments"] as $k => $c){
        $m["comments"][$k]["user"] = $c->user;
    }
    $m["genre"] = "";
    foreach($m["movie_genres"] as $k => $c){
        if($k == (count($m["movie_genres"]) - 1))
            $m["genre"] .= $c["genres"][0]["name"];
        else{
            $m["genre"] .= $c["genres"][0]["name"].", ";
        }
    }
    return view("movies.show",["movie"=>$m]);
});