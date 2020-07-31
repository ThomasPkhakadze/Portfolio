<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['title_ge', 'title_en', 'desc_ge',
                 'desc_en', 'work_ge', 'work_en', 'image', 'bg_img'];
}
