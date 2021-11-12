<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name'=>'Thầy giáo may mắn',
                    'email'=>'thaygiao@gmail.com',
                    'password'=>Hash::make('123456789'),
                    'phone'=>'97245466',
                    'address'=>'299 Lê Hoàn Ba Đình Hà Nội',
                    'role'=>0,
                ],
                [
                    'name'=>'Cô giáo cần mẫn',
                    'email'=>'cogiao@gmail.com',
                    'password'=>Hash::make('123456789'),
                    'phone'=>'94286452',
                    'address'=>'17 Đinh Tiên Hoàng TP-Thái Bình Thái Bình',
                    'role'=>0,
                ],
                [
                    'name'=>'Thầy hiệu phó trung trực',
                    'email'=>'hieupho@gmail.com',
                    'password'=>Hash::make('123456789'),
                    'phone'=>'066856954',
                    'address'=>'235 Lê Đại Hành - Minh Khai - Hà Nội',
                    'role'=>0,
                ],
                [
                    'name'=>'Cô hiệu trưởng bận rộn',
                    'email'=>'hieutruong@gmail.com',
                    'password'=>Hash::make('123456789'),
                    'phone'=>'09755615',
                    'address'=>'299 Lê Hoàn Ba Đình Hà Nội',
                    'role'=>0,
                ],
                [
                    'name'=>'Bác phụ huynh ',
                    'email'=>'phuhuynh@gmail.com',
                    'password'=>Hash::make('123456789'),
                    'phone'=>'08875835',
                    'address'=>'215 Đội Cấn Ba Đình Hà Nội',
                    'role'=>0,
                ],
                [
                    'name'=>'Bác bảo vệ',
                    'email'=>'baove@gmail.com',
                    'password'=>Hash::make('123456789'),
                    'phone'=>'0132535565',
                    'address'=>'299 Lê Hoàn Ba Đình Hà Nội',
                    'role'=>0,
                ],
                [
                    'name'=>'Shop BunBabyMart',
                    'email'=>'22bunstore@gmail.com',
                    'password'=>Hash::make('myt.less123'),
                    'phone'=>'0332383803',
                    'address'=>'Kim Hoàn-Cầu Đen-Vũ Phúc-Thái Bình ',
                    'role'=>1,
                ],
            ]
        );
    }
}
