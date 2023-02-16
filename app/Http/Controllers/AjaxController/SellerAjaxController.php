<?php

namespace App\Http\Controllers\AjaxController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerAjaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('UserAuthorized:' . 1);
    }

    public function GetCategoryChild(Request $request){
        $category = Category::findOrFail($request->data);
        foreach ($category->childs as $key){
            echo "<option value='". $key->id ."'>". $key->childName ."</option>";
        }
    }

    public function GetCategoryChildTo(Request $request){
        $category = ChildCategory::findOrFail($request->data);
        foreach ($category->ChildToChild as $key){
            echo "<option value='". $key->id ."'>". $key->childName ."</option>";
        }
    }
}
