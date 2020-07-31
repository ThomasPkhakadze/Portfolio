<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intro extends Model
{
    protected $fillable = ['title_ge', 'title_en', 'desc_ge', 'desc_en',
     'link_ge', 'link_en', 'url', 'image']; 
}
