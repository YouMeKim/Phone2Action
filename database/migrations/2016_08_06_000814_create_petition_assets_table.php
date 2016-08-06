<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetitionAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('petition_assets');

        Schema::create('petition_assets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('petitionid')->unsigned();
            $table->string('type');
            $table->string('location');
            $table->string('title');
            $table->string('description');
            $table->timestamps();

            $table->foreign('petitionid')->references('id')->on('petitions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('petition_assets');
    }
}
