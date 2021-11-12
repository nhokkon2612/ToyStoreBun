<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','image','quantity1','quantity2','cost','price','status','image','category_id','brand_id','supplier_id','material_id','size'
    ];
    public function orderdetail()
    {
        return $this->belongsTo(OrderDetails::class,'product_id');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class,'category_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brands::class,'brand_id');
    }

    public function material()
    {
        return $this->belongsTo(Materials::class,'material_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Suppliers::class,'supplier_id');
    }
}
