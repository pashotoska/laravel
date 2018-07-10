<?php

namespace App;

use App\Movie;

class Slug
{
    /**
     * @param $name
     * @param int $id
     * @return string
     */
    public function createSlug($name, $id = 0, $model)
    {
        // Normalize the name
        $slug = str_slug($name);

        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        switch($model){
            case "movie":
                $hasSlug = $this->getRelatedSlugsInMovie($name, $id);
                break;
            
        }
        if($hasSlug){
            $slug = $slug.'-'.$id;
        }
        return $slug;
    }

    protected function getRelatedSlugsInMovie($name, $id = 0)
    {
        return Movie::where('name', '=', $name)
            ->where('id', '<', $id)->count();
    }
}