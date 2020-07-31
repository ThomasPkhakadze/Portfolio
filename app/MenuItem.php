<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = ['label', 'label_ge', 'title_ge', 'title_en',
                           'body_ge', 'body_en', 'bg_color', 'image'];
}
