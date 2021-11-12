<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartsController extends Controller
{

    public function addToCart($id)
    {
        $product = Products::findOrFail($id);
        $carts=Session::get('cart');

        if (!$carts){
            $carts=[
                $id=>[
                    'id'=>$product->id,
                    'name'=>"$product->name",
                    'image'=>"$product->image",
                    'price'=>"$product->price",
                    'inStock'=>"$product->quantity2",
                    'quantity'=>1,
                    'total'=>$product->price,
                ],
            ];
        }else{
            $carts[$id]=[
                'id'=>$product->id,
                'name'=>"$product->name",
                'image'=>"$product->image",
                'price'=>"$product->price",
                'inStock'=>"$product->quantity2",
                'quantity'=>1,
                'total'=>$product->price,
            ];
        }

        Session::put("cart",$carts);
        $cart = \session('cart');
        foreach ($cart as $key=>$pro){
            $cart[$key]['total']=$pro['quantity']*$pro['price'];
            $allTotal[$key]=$pro['total'];
        }
        $allTot=array_sum($allTotal);
        session::put('allTotal',$allTot);
        alert()->success('Thêm giỏ hàng thành công', 'Successfully');
        return redirect()->back();
    }


    public function cart()
    {
        $cart = Session::get('cart');
        $flag=0;
        if ($cart==null){
            $cart=[];
            $flag=1;
        }
        return view('user.cart',compact('cart','flag'));
    }


    public function updateCart(Request $request)
    {
        $cart=session('cart');
        $updates=$request->quantity;
        foreach ($updates as $key=> $update){
            $cart[$key]['quantity']=$update[0];
            $cart[$key]['total']=$update[0]*$cart[$key]['price'];
            $allTotal[$key]=$update[0]*$cart[$key]['price'];
        }
        $allTot=array_sum($allTotal);
        session::put('allTotal',$allTot);
        Session::put("cart",$cart);
        return redirect()->route('showCart');
    }
}
