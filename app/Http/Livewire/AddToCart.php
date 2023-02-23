<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddToCart extends Component
{
    public $product;
    public $quantity = 1;

    public function AddCart()
    {
        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $this->product,
            'quantity' => $this->quantity,
        ]);
    }
    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
