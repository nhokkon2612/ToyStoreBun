<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('materials')->insert(
            [
                ['name'=>'Nhựa ABS'],
                ['name'=>'Nhựa PVC'],
                ['name'=>'Chất dẻo Slam'],
                ['name'=>'Đất nặn'],
                ['name'=>'Gỗ'],
            ],
        );
    }
}
