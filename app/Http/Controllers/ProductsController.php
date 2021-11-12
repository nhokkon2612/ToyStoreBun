<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddNewAndUpdateProduct;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Services\ProductsService;
use App\Models\Brands;
use App\Models\Categories;
use App\Models\Materials;
use App\Models\Products;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected $productsService;

    public function __construct(ProductsService $productsService)
    {
        $this->productsService = $productsService;
    }

    public function index()
    {
        $products = Products::with('category', 'material', 'supplier', 'brand')
                            ->where('action_product', '=', 0)
                            ->orderByDesc('date_import')
                            ->paginate(3);
        $categories = Categories::all();
        $brands = Brands::all();
        $suppliers = Suppliers::all();
        $materials = Materials::all();
        if (!Session::has('adminInfo')) {
            return view('user.index', compact('products', 'categories', 'suppliers', 'brands', 'materials'));
        } else {
            return view('admin.product.list', compact('products', 'categories', 'suppliers', 'brands', 'materials'));
        }

    }

    public function store(AddNewAndUpdateProduct $request)
    {

        return $this->productsService->store($request);
    }


    public function show($value)
    {
        $result = $this->productsService->show($value);
        return response()->json(['results' => "$result"]);
    }


    public function edit($id)
    {
        $product = Products::findOrFail($id);
        $categories = Categories::all();
        $materials = Materials::all();
        $brands = Brands::all();
        $suppliers = Suppliers::all();
        return view('admin.product.edit', compact('product', 'categories', 'materials', 'suppliers', 'brands'));
    }


    public function update(AddNewAndUpdateProduct $request, $id)
    {
        return $this->productsService->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->productsService->destroy($id);
    }

    public function listStopSale()
    {
        $products = Products::with('category', 'material', 'supplier', 'brand')->where('action_product', '=', 1)->orderByDesc('date_import')->paginate(20);
        $categories = Categories::all();
        $brands = Brands::all();
        $suppliers = Suppliers::all();
        $materials = Materials::all();
        return view('admin.product.stopsale', compact('products', 'categories', 'suppliers', 'brands', 'materials'));
    }

    public function reSale($id)
    {
        return $this->productsService->reSale($id);
    }

    public function upQuantity(Request $requset)
    {
        return $this->productsService->upQuantity($requset);
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $product = Products::with('category', 'material', 'supplier', 'brand')->where('name', 'like', "%$keyword%")->get();
        return response()->json($product);
    }
}
