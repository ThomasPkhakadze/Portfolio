<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Article extends Model
{
    protected $fillable = ['title_ge', 'title_en', 'body_ge', 'body_en', 'url', 'image'];



    public function getTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "title_" . $locale;
        return $this->$column;
    }

    public function getBodyAttribute()
    {
        $locale = App::getLocale();
        $column = "body_" . $locale;
        return $this->$column;
    }

    
}
