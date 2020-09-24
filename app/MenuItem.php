<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class MenuItem extends Model
{
    protected $fillable = ['label_en', 'label_ge', 'title_ge', 'title_en',
                           'body_ge', 'body_en', 'bg_color', 'image'];


    public function getLabelAttribute()
    {
        $locale = App::getLocale();
        $column = "label_" . $locale;
        return $this->$column;
    }

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
