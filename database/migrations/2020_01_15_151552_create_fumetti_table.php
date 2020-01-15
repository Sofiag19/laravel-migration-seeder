<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFumettiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fumetti', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titolo');
            $table->string('autore');
            $table->integer('anno');
            $table->text('recensione')->nullable();
            $table->integer('voto')->nullable();
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
        Schema::dropIfExists('fumetti');
    }
}
