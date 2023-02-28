<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['cart_id', 'orderNo', 'total'];

    public function cart(){
        return $this->belongsTo(Cart::class, 'cart_id', 'id');
    }
}
