<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildCategory extends Model
{
    use HasFactory;

    protected $fillable = ['childName'];

    public function categories(){
        return $this->belongsToMany(Category::class, 'categories_child', 'child_id', 'category_id');
    }

    public function products(){
        return $this->hasMany(Product::class, 'categoryChild_id', 'id');
    }

    public function ChildToChild(){
        return $this->belongsToMany(ChildToChildCategory::class, 'child_categories_child', 'child_id', 'child_to_child_id');
    }
}
