<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class SliderSkill extends Model
{
    protected $fillable = [
        'skills_str_ge', 'skills_str_en', 'skills_int'
    ];


    public function getSkillsStrAttribute()
    {
        $locale = App::getLocale();
        $column = 'skills_str_' . $locale;
        return $this->$column;
    }
}
