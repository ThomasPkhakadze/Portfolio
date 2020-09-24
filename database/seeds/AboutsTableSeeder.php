<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'name_ge' => Str::random(10),
            'name_en' => Str::random(10),
            'gender_ge' => Str::random(10),
            'gender_en' => Str::random(10),
            'birth_date_ge' => date('Y-m-d'),
            'birth_date_en' => date('Y-m-d'),
            'nationality_ge' => Str::random(10),
            'nationality_en' => Str::random(10), 
            'email' => Str::random(10).'@gmail.com',
            'phone_number' => rand(1000, 9999),
            'image' => Str::random(40)

        ]);
    }
}
