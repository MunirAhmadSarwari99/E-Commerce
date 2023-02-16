<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildToChildCategory extends Model
{
    use HasFactory;

    protected $fillable = ['childName'];

    public function products(){
        return $this->hasMany(Product::class, 'categoryChildTo_id', 'id');
    }

    public function ChildCategories(){
        $this->belongsToMany(ChildCategory::class, 'child_categories_child', 'child_id', 'child_to_child_id');
    }
}
