<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Work extends Model
{
    protected $fillable = ['work_ge', 'work_en', 'image'];


    public function getWorkAttribute(){
        $locale = App::getLocale();
        $column = "work_" . $locale;
        return $this->$column;
    }
}
