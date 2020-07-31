<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fact extends Model
{
    protected $fillable = ['education_ge', 'education_en',
                            'experience_ge', 'experience_en',
                            'skills_str_ge', 'skills_str_en',
                            'skills_int'];
}
