<?php

namespace App\Http\Services;

use App\Http\Repositories\ProductsRepository;
use App\Models\Products;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Time;

class ProductsService
{
    protected $productsRepository;

    public function __construct(ProductsRepository $productsRepository)
    {
        $this->productsRepository = $productsRepository;
    }

    public function index()
    {
    }


    public function create()
    {
        //
    }


    public function store($request)
    {
        $product = new Products();
        $product->name = $request->name;
        $product->quantity1 = (int)$request->quantity;
        $product->quantity2 = (int)$request->quantity;
        $product->size = $request->size;
        $product->cost = (int)$request->cost;
        $product->price = (int)$request->price;
        $product->status = $request->status;
        $product->category_id = (int)$request->category_id;
        $product->brand_id = (int)$request->brand_id;
        $product->material_id = (int)$request->material_id;
        $product->supplier_id = (int)$request->supplier_id;
        $product->date_import = date('Y-m-d H:i:s');
        $image = $request->file('image');
        if ($image == null) {
            $product->image = 'defautprocudt.png';
        } else {
            $image = time() . '-' . $product->name . '.' . $request->file('image')->extension();
            $product->image = $image;
            $request->image->move(public_path('images'), $image);
        }
        return $this->productsRepository->store($product);
    }


    public function show($value)
    {
        return $this->productsRepository->show($value);
    }


    public function edit(Products $products)
    {

    }


    public function update($request, $id)
    {
        $product = Products::findOrFail($id);
        $product->name = $request->name;
        $product->size = $request->size;
        $product->cost = (int)$request->cost;
        $product->price = (int)$request->price;
        $product->status = $request->status;
        $product->category_id = (int)$request->category_id;
        $product->brand_id = (int)$request->brand_id;
        $product->material_id = (int)$request->material_id;
        $product->supplier_id = (int)$request->supplier_id;
        $image = $request->file('image');
        if ($image == null) {
            $product->image = $request->oldimage;
        } else {
            $image = time() . '-' . $product->name . '.' . $request->file('image')->extension();
            $product->image = $image;
            $request->image->move(public_path('images'), $image);
        }
        return $this->productsRepository->update($product);

    }


    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->action_product = 1;
        return $this->productsRepository->stopSale($product);
    }

    public function reSale($id)
    {
        $product = Products::findOrFail($id);
        $product->action_product = 0;
        return $this->productsRepository->reSale($product);

    }

    public function upQuantity($request)
    {
        $product = Products::findOrFail($request->id);
        $oldquantity1 = $product->quantity1;
        $oldquantity2 = $product->quantity2;
        $product->quantity1 = $oldquantity1 + $request->addquantity;
        $product->quantity2 = $oldquantity2 + $request->addquantity;
        return $this->productsRepository->upQuantity($product);
    }

}
