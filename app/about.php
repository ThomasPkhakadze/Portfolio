<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    protected $fillable = ['title_ge', 'title_en', 'desc_ge', 'desc_en',
                            'name_ge', 'name_en', 'gender_ge', 
                            'gender_en', 'birth_date_ge',
                            'birth_date_en', 'nationality_ge',
                             'nationality_en', 
                            'email', 'phone_number', 'image' ];
}
