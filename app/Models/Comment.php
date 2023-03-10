<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment', 'rating'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public static function average($ProductID){
        $product = Product::findOrFail($ProductID);
        if ($product && $product->comments){
            return Comment::where('product_id', $product->id)->avg('rating');
        }
        return 0;
    }
}
