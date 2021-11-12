<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert(
            [
                [
                    'name'=>'Thái Bảo',
                    'phone'=>'0986999666',
                    'email'=>'baothai@gmail.com',
                    'address'=>'296 Đội cấn-Ba Đình-Hà Nội',
                    'status'=>'New supplier',
                ],
                [
                    'name'=>'An Nam ',
                    'phone'=>'0988676232',
                    'email'=>'vietannam@gmail.com',
                    'address'=>'292-Đặng Tiến Đông-Hà Đông-Hà Nội',
                    'status'=>'New supplier',
                ],
                [
                    'name'=>'Cường Bảy',
                    'phone'=>'0996123123',
                    'email'=>'baycuong@gmail.com',
                    'address'=>'81-Nguyễn Trãi-Thanh Xuân-Hà Nội',
                    'status'=>'New supplier',
                ],
                [
                    'name'=>'Cris Cầu Đen',
                    'phone'=>'0837776262',
                    'email'=>'crisvietnam@gmail.com',
                    'address'=>'92-Cầu Đen RiverSide-Hà Nội',
                    'status'=>'New supplier',
                ],
                [
                    'name'=>'TinhTe',
                    'phone'=>'066489656',
                    'email'=>'tinhte@gmail.com',
                    'address'=>'26 Trần Hưng Đạo-Q.10-Thủ Đức-TP.Hồ Chí Minh',
                    'status'=>'New supplier',
                ],
                [
                    'name'=>'Phi Hùng',
                    'phone'=>'0966969646',
                    'email'=>'phihung93@gmail.com',
                    'address'=>'183 Giải Phóng-Hà Nội',
                    'status'=>'New supplier',
                ],
            ],
        );
    }
}
