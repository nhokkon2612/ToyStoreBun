<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->hasOne(Orders::class,'order_id');
    }

    public function product()
    {
        return $this->hasOne(Products::class,'product_id');
    }

}
