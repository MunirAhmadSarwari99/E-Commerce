<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    use HasFactory;
    protected $fillable = ['colors'];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
