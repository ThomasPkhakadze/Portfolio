<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title_ge', 'title_en', 'header_ge', 'header_en',
                           'body_ge', 'body_en', 'url', 'image'];

}
