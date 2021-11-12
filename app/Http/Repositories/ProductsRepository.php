<?php

namespace App\Http\Repositories;

use App\Models\Products;

class ProductsRepository
{
    protected $products;

    public function __construct(Products $products)
    {
        $this->products = $products;
    }

    public function store($product)
    {
        $product->save();
        alert()->success('Thêm mới đồ chơi hoàn tất', 'Successfully');
        return redirect()->route('admin.product.list');
    }

    public function update($product)
    {
        $product->save();
        alert()->success('Cập nhật sản phẩm thành công', 'Successfully');
        return redirect()->route('admin.product.list');
    }

    public function stopSale($product)
    {
        $product->save();
        alert()->success('Ngừng kinh doanh thành công', 'Successfully');
        return redirect()->route('admin.product.stopsale');
    }

    public function reSale($product)
    {
        $product->save();
        alert()->success('Đã tái kinh doanh mặt hàng', 'Successfully');
        return redirect()->route('admin.product.list');
    }

    public function upQuantity($product)
    {
        $product->save();
        alert()->success('Đã nhập thêm số lượng thành công', 'Successfully');
        return redirect()->route('admin.product.list');

    }

    public function show($value)
    {
        $condition = "%".$value."%";
         return $this->products->where('name','like',"$condition")->get();
    }

}
