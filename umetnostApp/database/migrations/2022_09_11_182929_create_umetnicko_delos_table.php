<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmetnickoDelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umetnicko_delos', function (Blueprint $table) {
            $table->id();
             $table->string('naziv');
             $table->integer('godina');
             $table->foreignId('autor_id');
             $table->foreignId('vrsta_id'); 
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
        Schema::dropIfExists('umetnicko_delos');
    }
}
