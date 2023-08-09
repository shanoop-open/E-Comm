<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('product',['products'=>$products]);
    }

    public function detail($id)
    {
        $product=Product::find($id);
        return view('detail',['product'=>$product]);
    }

    public function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart=new Cart();
            $cart->user_id=$req->session()->get('user')->id;
            $cart->product_id=$req->product_id;
            $cart->save();
            
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    static function countCart()
    {
        $userId=Session::get('user')->id;
        return Cart::where('user_id',$userId)->count();
    }

    public function cartList()
    {
        $userId=Session::get('user')->id;
        $products=DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)
        ->select('products.*','carts.id as cartId')
        ->get();

        return view('cartList',['products'=>$products]);
    }

    public function removeFromCart($id)
    {
        Cart::destroy($id);
        return redirect('cart-list');
    }

    public function orderNow()
    {
        $userId=Session::get('user')->id;
        $productSum=DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)
        ->sum('products.price');

        echo $productSum;
    }
}
