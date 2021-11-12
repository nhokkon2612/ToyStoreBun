<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brands')->insert(
            [
                ['name'=>'Cris'],
                ['name'=>'DolBay'],
                ['name'=>'AssassinAngle'],
                ['name'=>'Lil Bablo'],
            ],
        );
    }
}
