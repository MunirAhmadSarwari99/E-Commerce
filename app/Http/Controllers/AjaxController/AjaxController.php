<?php

namespace App\Http\Controllers\AjaxController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('UserAuthorized:' . 0);
    }

    public function GetCategoryChild(Request $request){
        $category = Category::findOrFail($request->data);
        foreach ($category->childs as $key){
            echo "<option value='". $key->id ."'>". $key->childName ."</option>";
        }
    }
}
