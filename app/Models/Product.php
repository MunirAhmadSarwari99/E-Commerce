<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'ChildCategory_id', 'CategoryTag_id', 'productName', 'details', 'tax', 'price'];

    public function detail(){
        return $this->hasMany(ProductDetail::class, 'product_id', 'id');
    }

    public function GetOneImage($id){
        $product = ProductDetail::where('product_id', $id)->first();
        return $product->images;
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function chold(){
        return $this->belongsTo(ChildCategory::class, 'ChildCategory_id', 'id');
    }

    public function tag(){
        return $this->belongsTo(CategoryTag::class, 'CategoryTag_id', 'id');
    }

    public function childCategory(){
        return $this->belongsTo(ChildCategory::class, 'category_id', 'id');
    }

    public function carts(){
        return $this->hasMany(Cart::class, 'product_id', 'id');
    }
}
