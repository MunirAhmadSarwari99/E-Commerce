<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['categoryName'];

    public function childs(){
        return $this->belongsToMany(ChildCategory::class, 'categories_child', 'category_id', 'child_id');
    }
}
