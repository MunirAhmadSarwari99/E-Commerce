<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildCategory extends Model
{
    use HasFactory;

    protected $fillable = ['childName'];

    public function categories(){
        $this->belongsToMany(Category::class, 'categories_child', 'child_id', 'category_id');
    }

    public function ChildToChild(){
        $this->belongsToMany(ChildToChildCategory::class, 'child_categories_child', 'child_to_child_id', 'child_id');
    }
}
