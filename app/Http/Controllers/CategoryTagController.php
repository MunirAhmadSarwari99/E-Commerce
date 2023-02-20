<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryTagsRequest;
use App\Models\CategoryTag;
use App\Models\ChildCategory;
use Illuminate\Http\Request;

class CategoryTagController extends Controller
{
    public function __construct()
    {
        $this->middleware('UserAuthorized:' . 0);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryTagsRequest $request)
    {
        $category = ChildCategory::findOrFail($request->input('category'));
        $categoryName = $request->input('categoryName');

        foreach ($categoryName as $key => $key){
            $tag= new CategoryTag(['tagName' => $request->input('categoryName')[$key]]);
            $category->tags()->save($tag);
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CategoryTag::findOrFail($id);
        return view('CMS.editCategoryTag', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = CategoryTag::findOrFail($id);
        $category->tagName =  $request->input('categoryName');
        $category->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = CategoryTag::findOrFail($id);
        $category->delete();
        return back();
    }
}
