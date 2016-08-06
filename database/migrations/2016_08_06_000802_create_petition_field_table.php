<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetitionFieldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('petition_field');

        Schema::create('petition_field', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('petitionid')->unsigned();
            $table->enum('type',[]);
            $table->string('title');
            $table->string('value');
            $table->timestamps();

            $table->foreign('petitionid')->references('id')->on('petition');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('petition_field');
    }
}
