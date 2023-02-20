<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['productName', 'details', 'tax', 'price'];

    public function details(){
        return $this->hasMany(ProductDetail::class, 'product_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function cholds(){
        return $this->belongsTo(ChildCategory::class, 'ChildCategory_id', 'id');
    }

    public function tag(){
        return $this->belongsTo(CategoryTag::class, 'CategoryTag_id', 'id');
    }
}
