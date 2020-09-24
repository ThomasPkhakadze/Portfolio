<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Intro extends Model
{
    protected $fillable = ['title_ge', 'title_en', 'desc_ge', 'desc_en',
     'link_ge', 'link_en', 'url', 'image']; 



    public function getTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "title_" . $locale;
        return $this->$column;
    }

    public function getDescAttribute()
    {
        $locale = App::getLocale();
        $column = "desc_" . $locale;
        return $this->$column;
    }

    public function getLinkAttribute()
    {
        $locale = App::getLocale();
        $column = "link_" . $locale;
        return $this->$column;
    }
}
