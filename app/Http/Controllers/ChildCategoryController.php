<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryTagsRequest;
use App\Models\Category;
use App\Models\ChildCategory;
use Illuminate\Http\Request;

class ChildCategoryController extends Controller
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
        $category = Category::findOrFail($request->input('category'));
        $categoryName = $request->input('categoryName');

        foreach ($categoryName as $key => $key){
            $child = new ChildCategory(['childName' => $request->input('categoryName')[$key]]);
            $category->childs()->save($child);
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
        $category = ChildCategory::findOrFail($id);
        return view('CMS.showChildCategory', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = ChildCategory::findOrFail($id);
        return view('CMS.editChildCategory', compact('category'));
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
        $category = ChildCategory::findOrFail($id);
        $category->childName =  $request->input('categoryName');
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
        $category = ChildCategory::findOrFail($id);
        $category->delete();
        return back();
    }
}
