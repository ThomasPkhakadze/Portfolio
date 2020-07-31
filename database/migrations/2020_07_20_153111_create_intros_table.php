<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_ge');
            $table->string('title_en');
            $table->string('desc_ge');
            $table->string('desc_en');
            //redirecting string
            $table->string('link_ge');
            $table->string('link_en');
            //redirecting url 
            $table->string('url');
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
        Schema::dropIfExists('intros');
    }
}
