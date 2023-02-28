<?php

namespace App\Http\Controllers\AjaxController;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerAjaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('UserAuthorized:' . 2);
    }

    public function Cart(Request $request){
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        foreach ($carts as $cart){
            $SubTotal =  $cart->product->price * $cart->sum('quantity');
            $kdv = round(($cart->product->price * $cart->product->tax) / 100 * $cart->sum('quantity'), 0);
            $total = $SubTotal + $kdv;
            $data = [
                'SubTotal' => $SubTotal,
                'kdv' => $kdv,
                'total' => $total,
            ];
            return $data;
        }
        return false;
    }

    public function QuantityUpdate(Request $request){
        $cart = Cart::findOrFail($request->input('id'));
        $cart->quantity = $request->input('quantity');
        $cart->save();
    }

    public function IncrementCart(Request $request){
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        foreach ($carts as $cart){
            $SubTotal =  $cart->product->price * $cart->sum('quantity');
            $kdv = round(($cart->product->price * $cart->product->tax) / 100 * $cart->sum('quantity'), 0);
            $total = $SubTotal + $kdv;
            $data = [
                'SubTotal' => $SubTotal,
                'kdv' => $kdv,
                'total' => $total,
            ];
            return $data;
        }
        return false;
    }

    public function DecrementCart(Request $request){
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        foreach ($carts as $cart){
            $SubTotal =  $cart->product->price * $cart->sum('quantity');
            $kdv = round(($cart->product->price * $cart->product->tax) / 100 * $cart->sum('quantity'), 0);
            $total = $SubTotal + $kdv;
        }

        $cart = Cart::findOrFail($request->input('id'));
        $Total =  $cart->product->price * $cart->quantity;
        $tax = round(($cart->product->price * $cart->product->tax) / 100 * $cart->quantity, 0);
        $totals = $Total + $tax;
        $data = [
            'SubTotal' => $SubTotal - $Total,
            'kdv' => $kdv - $tax,
            'total' => $total - $totals,
        ];
        return $data;
        return false;
    }
}
