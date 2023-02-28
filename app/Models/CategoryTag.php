<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTag extends Model
{
    use HasFactory;
    protected $fillable = ['tagName'];

    public function child(){
        return $this->belongsTo(ChildCategory::class, 'child_id', 'id');
    }

    public function products(){
        return $this->hasMany(Product::class, 'CategoryTag_id', 'id');
    }
}
