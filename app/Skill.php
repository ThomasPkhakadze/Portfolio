<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['title_ge', 'title_en', 'desc_ge', 'desc_en', 'image'];
}
