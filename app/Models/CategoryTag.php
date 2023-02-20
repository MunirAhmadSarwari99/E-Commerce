<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTag extends Model
{
    use HasFactory;
    protected $fillable = ['tagName'];

    public function child(){
        return $this->hasMany(ChildCategory::class, 'child_id', 'id');
    }

    public function products(){
        return $this->hasMany(Product::class, 'ChildCategory_id', 'id');
    }
}
