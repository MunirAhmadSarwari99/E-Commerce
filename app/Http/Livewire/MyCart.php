<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyCart extends Component
{
    public $carts;
    public $productTotal;
    public $quantity;
    public $SubTotal;
    public $kdv;
    public $total;

    public function Quantity(){
        $pro = Cart::where('product_id', 6)->get();
        foreach ($pro as $cart){

            dd( $cart->product->price * $this->quantity);
//            $this->productTotal =  $cart->product->price * $this->quantity;
        }
    }
    public function mount(){
        $this->carts = Cart::where('user_id', Auth::user()->id)->get();
        foreach ($this->carts as $cart){
            $this->SubTotal =  $cart->product->price * $cart->sum('quantity');
            $this->kdv = round(($cart->product->price * $cart->product->tax) / 100 * $cart->sum('quantity'), 0);
            $this->total = $this->SubTotal + $this->kdv;
        }
    }
    public function render()
    {
        return view('livewire.my-cart');
    }
}
