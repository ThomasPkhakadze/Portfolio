<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name_ge');
            $table->string('name_en');

            $table->string('gender_ge');
            $table->string('gender_en');

            $table->date('birth_date_ge');
            $table->date('birth_date_en');

            $table->string('nationality_ge');
            $table->string('nationality_en');

            $table->string('email');
            $table->integer('phone_number');
            $table->string('image');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
