<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetitionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('petition');

        Schema::create('petition', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('public');
            $table->boolean('active');
            $table->string('title');
            $table->mediumText('summary');
            $table->longText('body');
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
        Schema::drop('petition');
    }
}
