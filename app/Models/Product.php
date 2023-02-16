<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'categoryChild_id', 'categoryChildTo_id', 'productName', 'productModel', 'image', 'price'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function childCategory(){
        return $this->belongsTo(ChildCategory::class, 'categoryChild_id', 'id');
    }

    public function childToCategory(){
        return $this->belongsTo(ChildToChildCategory::class, 'categoryChildTo_id', 'id');
    }
}
