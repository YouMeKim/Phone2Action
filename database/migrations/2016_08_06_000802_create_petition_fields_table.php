<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetitionFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('petition_fields');

        Schema::create('petition_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('petitionid')->unsigned();
            $table->enum('type',[]);
            $table->string('title');
            $table->string('value');
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
        Schema::drop('petition_fields');
    }
}
