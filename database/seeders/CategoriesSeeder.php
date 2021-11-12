<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(
            [
                ['name'=>'Đồ chơi mô hình'],
                ['name'=>'Đồ chơi trí tuệ'],
                ['name'=>'Đồ chơi xếp hình'],
                ['name'=>'Đồ chơi giáo dục'],
                ['name'=>'Đồ chơi truyền thống'],
            ],
        );
    }
}
