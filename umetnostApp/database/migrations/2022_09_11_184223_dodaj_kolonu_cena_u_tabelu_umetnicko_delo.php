<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DodajKolonuCenaUTabeluUmetnickoDelo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('umetnicko_delos', function (Blueprint $table) {
           
            
             $table->integer('cena');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('umetnicko_delos', function (Blueprint $table) {
           
            
            $table->removeColumn('cena');
       
       });
    }
}
