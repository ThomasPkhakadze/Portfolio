<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Fact extends Model
{
    protected $fillable = ['education_ge', 'education_en',
                            'experience_ge', 'experience_en'
                           ];


    public function getEducationAttribute()
    {
        $locale = App::getLocale();
        $column = "education_" . $locale;
        return $this->$column;
    }

    public function getExperienceAttribute()
    {
        $locale = App::getLocale();
        $column = "experience_" . $locale;
        return $this->$column;
    }
}
