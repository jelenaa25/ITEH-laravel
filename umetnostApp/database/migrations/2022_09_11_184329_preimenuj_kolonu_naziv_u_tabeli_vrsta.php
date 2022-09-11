<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PreimenujKolonuNazivUTabeliVrsta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vrstas', function (Blueprint $table) {
           
            
            $table->renameColumn('naziv','naziv_vrste');
       
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vrstas', function (Blueprint $table) {
           
            
            $table->renameColumn('naziv_vrste','naziv');
       
       });
    }
}
