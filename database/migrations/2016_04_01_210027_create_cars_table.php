<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("cars", function($table){
            $table->increments("id");
            $table->string("manufacturer");
            $table->string("type");
            $table->integer("year");
            $table->string("color");
            $table->integer("mileage");
            $table->integer('owner_id')->unsigned()->nullable();
            $table->foreign("owner_id")->references("id")->on("owners");
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
        Schema::drop("cars");
    }
}
