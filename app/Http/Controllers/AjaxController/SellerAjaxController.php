<?php

namespace App\Http\Controllers\AjaxController;

use App\Http\Controllers\Controller;
use App\Models\CategoryTag;
use App\Models\ChildCategory;
use Illuminate\Http\Request;

class SellerAjaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('UserAuthorized:' . 1);
    }
    public function CategoryChild(Request $request){
        $childs = ChildCategory::where('category_id', $request->input('id'))->get();
        $output = '<option value=""></option>';
        foreach ($childs as $key){
            $output .= "<option value='".$key->id."'>". $key->childName."</option>";
        }
        echo $output;
    }
    public function CategoryTags(Request $request){
        $tags = CategoryTag::where('child_id', $request->input('id'))->get();
        $output = '<option value=""></option>';
        foreach ($tags as $key){
            $output .= "<option value='".$key->id."'>". $key->tagName."</option>";
        }
        echo $output;
    }
}
