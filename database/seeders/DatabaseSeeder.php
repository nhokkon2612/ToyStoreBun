<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(BrandsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(MaterialsSeeder::class);
        $this->call(SuppliersSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ProductsSeeder::class);
    }
}
