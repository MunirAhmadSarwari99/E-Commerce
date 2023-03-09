<?php

namespace App\Http\Controllers\AjaxController;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerAjaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('UserAuthorized:' . 2);
    }

    public function Cart(){
        $carts = Cart::where('user_id', Auth::user()->id)->where('checked', 1)->get();
        $data = null;
        if ($carts->count() == 1){
            foreach ($carts as $cart){
                $SubTotal =  $cart->product->price * $cart->quantity;
                $kdv = round(($SubTotal * $cart->product->tax) / 100, 0);
                $total = $SubTotal + $kdv;
                $data = [
                    'SubTotal' => $SubTotal,
                    'kdv' => $kdv,
                    'total' => $total,
                ];
            }
        }else{
            foreach ($carts as $cart){
                $SubTotal =  $cart->product->sum('price') * $cart->sum('quantity');
                $kdv = round(($SubTotal * $cart->product->tax) / 100, 0);
                $total = $SubTotal + $kdv;
                $data = [
                    'SubTotal' => $SubTotal,
                    'kdv' => $kdv,
                    'total' => $total,
                ];
            }
        }

        return $data;
    }

    public function AddToCart(Request $request){
        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $request->input('id'),
            'quantity' => 1,
        ]);
    }
    public function DeleteCart(Request $request){
        $cart = Cart::findOrFail($request->input('id'));
        $cart->delete();
    }

    public function QuantityUpdate(Request $request){
        $cart = Cart::findOrFail($request->input('id'));
        $cart->quantity = $request->input('quantity');
        $cart->save();
    }

    public function IncrementCart(Request $request){
        $cart = Cart::findOrFail($request->input('id'));
        $cart->checked = 1;
        $cart->save();
        $carts = Cart::where('user_id', Auth::user()->id)->where('checked', 1)->get();
        $data = null;
        if ($carts->count() == 0){
            $data = [
                'SubTotal' => 0,
                'kdv' => 0,
                'total' => 0,
            ];

        }elseif($carts->count() == 1){
            foreach ($carts as $cart){
                $SubTotal =  $cart->product->price * $cart->quantity;
                $kdv = round(($SubTotal * $cart->product->tax) / 100, 0);
                $total = $SubTotal + $kdv;
                $data = [
                    'SubTotal' => $SubTotal,
                    'kdv' => $kdv,
                    'total' => $total,
                ];
            }
        }else{
            foreach ($carts as $cart){
                $SubTotal =  $cart->product->sum('price') * $cart->sum('quantity');
                $kdv = round(($SubTotal * $cart->product->tax) / 100, 0);
                $total = $SubTotal + $kdv;
                $data = [
                    'SubTotal' => $SubTotal,
                    'kdv' => $kdv,
                    'total' => $total,
                ];
            }
        }

        return $data;
    }

    public function DecrementCart(Request $request){

        $cart = Cart::findOrFail($request->input('id'));
        $cart->checked = 0;
        $cart->save();

        $carts = Cart::where('user_id', Auth::user()->id)->where('checked', 1)->get();
        $data = null;
        if ($carts->count() == 0){
            $data = [
                'SubTotal' => 0,
                'kdv' => 0,
                'total' => 0,
            ];

        }elseif($carts->count() == 1){
            foreach ($carts as $cart){
                $SubTotal =  $cart->product->price * $cart->quantity;
                $kdv = round(($SubTotal * $cart->product->tax) / 100, 0);
                $total = $SubTotal + $kdv;
                $data = [
                    'SubTotal' => $SubTotal,
                    'kdv' => $kdv,
                    'total' => $total,
                ];
            }
        }else{
            foreach ($carts as $cart){
                $SubTotal =  $cart->product->sum('price') * $cart->sum('quantity');
                $kdv = round(($SubTotal * $cart->product->tax) / 100, 0);
                $total = $SubTotal + $kdv;
                $data = [
                    'SubTotal' => $SubTotal,
                    'kdv' => $kdv,
                    'total' => $total,
                ];
            }
        }

        return $data;
    }

    public function wishlist(Request $request){
        $product = Product::findOrFail($request->input('id'));
        $wishlists = Wishlist::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();
        if ($wishlists == null){
            $wishlist = new Wishlist;
            $wishlist->user()->associate(Auth::user());
            $wishlist->product()->associate($product);
            $wishlist->save();
        }else{
            $wishlists->delete();
        }
    }
}
