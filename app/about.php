<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class About extends Model
{
    protected $fillable = [ 'name_ge', 'name_en', 'gender_ge', 
                            'gender_en', 'birth_date_ge',
                            'birth_date_en', 'nationality_ge',
                             'nationality_en', 
                            'email', 'phone_number', 'image' ];


    public function getNameAttribute()
    {
        $locale = App::getLocale();
        $column = "name_" . $locale;
        return $this->$column;
    }

    public function getGenderAttribute()
    {
        $locale = App::getLocale();
        $column = "gender_" . $locale;
        return $this->$column;
    }

    public function getDOBAttribute()
    {
        $locale = App::getLocale();
        $column = "birth_date_" . $locale;
        return $this->$column;
    }

    public function getNationalityAttribute()
    {
        $locale = App::getLocale();
        $column = "nationality_" . $locale;
        return $this->$column;
    }

    

    
                            


}



    