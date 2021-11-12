<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'name'=>'Máy bay mô hình',
                    'image'=>'chưa có',
                    'status'=>'Bán rất là chạy',
                    'cost'=>239000,
                    'price'=>389000,
                    'quantity1'=>200,
                    'quantity2'=>200,
                    'date_import'=>'2020-12-31 23:59:59',
                    'size'=>'30*30',
                    'brand_id'=>1,
                    'category_id'=>1,
                    'material_id'=>1,
                    'supplier_id'=>1
                ],
                [
                    'name'=>'Vịt gỗ bơi cùng bé',
                    'image'=>'chưa có',
                    'status'=>'Bán rất là chạy',
                    'cost'=>139000,
                    'price'=>179000,
                    'quantity1'=>500,
                    'quantity2'=>500,
                    'date_import'=>'2020-12-31 23:59:59',
                    'size'=>'19*25',
                    'brand_id'=>1,
                    'category_id'=>1,
                    'material_id'=>1,
                    'supplier_id'=>1
                ],
                [
                    'name'=>'Sâu Gỗ',
                    'image'=>'chưa có',
                    'status'=>'Bán rất là chạy',
                    'cost'=>15000,
                    'price'=>34000,
                    'quantity1'=>500,
                    'quantity2'=>500,
                    'date_import'=>'2020-12-31 23:59:59',
                    'size'=>'5*15',
                    'brand_id'=>1,
                    'category_id'=>1,
                    'material_id'=>1,
                    'supplier_id'=>1
                ],
                [
                    'name'=>'Oto công trình',
                    'image'=>'chưa có',
                    'status'=>'Bán rất là chạy',
                    'cost'=>26000,
                    'price'=>35000,
                    'quantity1'=>500,
                    'quantity2'=>500,
                    'date_import'=>'2020-12-31 23:59:59',
                    'size'=>'6*10*10',
                    'brand_id'=>1,
                    'category_id'=>1,
                    'material_id'=>1,
                    'supplier_id'=>1
                ],
                [
                    'name'=>'Máy bay giấy',
                    'image'=>'chưa có',
                    'status'=>'Bán rất là chạy',
                    'cost'=>6000,
                    'price'=>25000,
                    'quantity1'=>500,
                    'quantity2'=>500,
                    'date_import'=>'2020-12-31 23:59:59',
                    'size'=>'6*20',
                    'brand_id'=>1,
                    'category_id'=>1,
                    'material_id'=>1,
                    'supplier_id'=>1
                ],
                [
                    'name'=>'Rùa bơi tinh nghich',
                    'image'=>'chưa có',
                    'status'=>'Bán rất là chạy',
                    'cost'=>8000,
                    'price'=>15000,
                    'quantity1'=>500,
                    'quantity2'=>500,
                    'date_import'=>'2020-12-31 23:59:59',
                    'size'=>'6*6*10',
                    'brand_id'=>1,
                    'category_id'=>1,
                    'material_id'=>1,
                    'supplier_id'=>1
                ],
                [
                    'name'=>'Xe cứu hỏa mô hình',
                    'image'=>'chưa có',
                    'status'=>'Bán rất là chạy',
                    'cost'=>56000,
                    'price'=>79000,
                    'quantity1'=>500,
                    'quantity2'=>500,
                    'date_import'=>'2020-12-31 23:59:59',
                    'size'=>'15*20*15',
                    'brand_id'=>1,
                    'category_id'=>1,
                    'material_id'=>1,
                    'supplier_id'=>1
                ],
                [
                    'name'=>'Oto địa hình ',
                    'image'=>'chưa có',
                    'status'=>'Bán rất là chạy',
                    'cost'=>89000,
                    'price'=>13500,
                    'quantity1'=>500,
                    'quantity2'=>500,
                    'date_import'=>'2020-12-31 23:59:59',
                    'size'=>'20*20*15',
                    'brand_id'=>1,
                    'category_id'=>1,
                    'material_id'=>1,
                    'supplier_id'=>1
                ],
                [
                    'name'=>'Tranh gỗ puzzle',
                    'image'=>'chưa có',
                    'status'=>'Bán rất là chạy',
                    'cost'=>15000,
                    'price'=>45000,
                    'quantity1'=>500,
                    'quantity2'=>500,
                    'date_import'=>'2020-12-31 23:59:59',
                    'size'=>'20*20*3',
                    'brand_id'=>1,
                    'category_id'=>1,
                    'material_id'=>1,
                    'supplier_id'=>1
                ],
                [
                    'name'=>'Máy bán bóng bay',
                    'image'=>'chưa có',
                    'status'=>'Bán rất là chạy',
                    'cost'=>95000,
                    'price'=>115000,
                    'quantity1'=>500,
                    'quantity2'=>500,
                    'date_import'=>'2020-12-31 23:59:59',
                    'size'=>'15*25*8',
                    'brand_id'=>1,
                    'category_id'=>1,
                    'material_id'=>1,
                    'supplier_id'=>1
                ],
                [
                    'name'=>'Sâu ăn dặm cho bé',
                    'image'=>'chưa có',
                    'status'=>'Bán rất là chạy',
                    'cost'=>15000,
                    'price'=>32000,
                    'quantity1'=>500,
                    'quantity2'=>500,
                    'date_import'=>'2020-12-31 23:59:59',
                    'size'=>'5*15*5',
                    'brand_id'=>1,
                    'category_id'=>1,
                    'material_id'=>1,
                    'supplier_id'=>1
                ],
            ]
        );
    }
}
