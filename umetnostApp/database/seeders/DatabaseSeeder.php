<?php

namespace Database\Seeders;

use App\Models\Autor;
use App\Models\UmetnickoDelo;
use App\Models\User;
use App\Models\Vrsta;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        UmetnickoDelo::truncate();
        Autor::truncate();
        Vrsta::truncate();

        User::factory(5)->create();
        Autor::factory(10)->create();
        $vs = new VrstaSeeder();
        $vs->run();
        UmetnickoDelo::factory(15)->create();
    }
}
