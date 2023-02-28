<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddToCart extends Component
{
    public $product;
    public $quantity = 1;

    public function AddCart()
    {
        if (Auth::check()) {
            Cart::create([
                'user_id' => Auth::user()->id,
                'product_id' => $this->product,
                'quantity' => $this->quantity,
            ]);
            $this->emitTo('MyCart', '$refresh');
        }else{
            return redirect(route('login'));
        }
    }
    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
