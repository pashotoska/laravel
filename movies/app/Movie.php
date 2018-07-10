<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    public function user() {
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function country() {
    	return $this->belongsTo('App\Country','country_id','id');
    }
    public function currency() {
    	return $this->belongsTo('App\Currency','currency_id','id');
    }
    public function comments(){
        return $this->hasMany('App\Comment', 'movie_id');
    }
    public function movieGenres(){
        return $this->hasMany('App\MovieGenre', 'movie_id');
    }
    public function genre(){
        $genres = [];
    	foreach($this->movieGenres as $movieGenre){
            $genres= array_merge($movieGenre->genres->toArray(),$genres);
        } 
    	return collect($genres);
    }
}
