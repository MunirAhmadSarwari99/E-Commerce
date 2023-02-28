<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryTag;
use App\Models\ChildCategory;
use Illuminate\Http\Request;

class CategoryMenuController extends Controller
{
    public function Woman($id){
        $catgory = Category::findOrFail($id);
        return view('category', compact('catgory'));
    }
    public function ChildCategory($id){
        $catgory = ChildCategory::findOrFail($id);
        return view('childCategory', compact('catgory'));
    }

    public function Tag($id){
        $catgory = CategoryTag::findOrFail($id);
        return view('tag', compact('catgory'));
    }
}
