<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            //lable for multiple purposes, like data-href, id and label itself
            $table->string('label');
            $table->string('label_ge');
            //section title
            $table->string('title_ge');
            $table->string('title_en');
            //section text
            $table->text('body_ge');
            $table->text('body_en');
            //section bg-color
            $table->string('bg_color')->default('#eee9fb');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('menu_items');
    }
}
