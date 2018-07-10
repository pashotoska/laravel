<?php

use Illuminate\Http\Request;
use App\Movie;
use App\Slug;
use \Cviebrock\EloquentSluggable\Services\SlugService;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/films",function(Request $request){
    $getTotal = $request->getTotal;
    $start = 1*$request->start;
    $limit = 1*$request->limit;
    $response = new StdClass();
    if($getTotal){
        $response->total = Movie::count();
    }
    $slug = new Slug();
    $movies = Movie::skip($start)->take($limit)->get();
    foreach($movies as $key=>$m){
        $movies[$key]["user"] = $m->user;
        $movies[$key]["country"] = $m->country;
        $movies[$key]["currency"] = $m->currency;
        $movies[$key]["comments"] = $m->comments;
        foreach($movies[$key]["comments"] as $k => $c){
            $movies[$key]["comments"][$k]["user"] = $c->user;
        }
        $m->genre();
    }
    $response->movie =$movies;
    return json_encode($response);
});