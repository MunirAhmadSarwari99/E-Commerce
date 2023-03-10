<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['productName', 'details', 'tax', 'price', 'oldPrice', 'discount'];
    public static function ProductID($id){
        $product = Product::findOrFail($id);
        $cart = Cart::where('product_id', $product->id)->first();
        if ($cart){
            return $cart->product_id;
        }
        return false;
    }

    public function detail(){
        return $this->hasMany(ProductDetail::class, 'product_id', 'id');
    }

    public function colors(){
        return $this->hasMany(ProductColor::class, 'product_id', 'id');
    }

    public function GetOneImage($id){
        $product = ProductDetail::where('product_id', $id)->first();
        return $product->images;
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'product_id', 'id');
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

    public function wishlists(){
        return $this->hasMany(Wishlist::class, 'product_id', 'id');
    }
}
