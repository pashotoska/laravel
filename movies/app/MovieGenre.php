<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieGenre extends Model
{
    //
    public function genres(){
        return $this->hasMany("\App\Genre","id","genre_id");
    }
}
