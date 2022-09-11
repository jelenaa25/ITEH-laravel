<?php

namespace Database\Seeders;

use App\Models\Vrsta;
use Illuminate\Database\Seeder;

class VrstaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $v1 =  new Vrsta();
        $v1->naziv_vrste="slika";
        $v1->save();

        $v2 =  new Vrsta();
        $v2->naziv_vrste="fotografija";
        $v2->save();

        $v3 =  new Vrsta();
        $v3->naziv_vrste="skulptura";
        $v3->save();

        
    }
}
