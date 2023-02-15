<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ChilToChilddCategoryRequest;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\ChildToChildCategory;
use Illuminate\Http\Request;

class ChildToChildCategoryController extends Controller
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
        $category = Category::all();
        $childTo = ChildToChildCategory::paginate(10);
        return view('CMS.childToChildCategory', compact('category', 'childTo'));
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
    public function store(ChilToChilddCategoryRequest $request)
    {

        $childName = ChildCategory::findOrFail($request->input('childName'));

        $category = $request->input('categoryName');

        foreach ($category as $key => $key){
            $childTo = ChildToChildCategory::create(['childName' => $request->input('categoryName')[$key]]);
            $childName->ChildToChild()->attach($childTo->id);
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
        $category = ChildToChildCategory::findOrFail($id);
        return view('CMS.editChildToChildCategory', compact('category'));
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
        $category = ChildToChildCategory::findOrFail($id);
        $category->childName = $request->input('categoryName');
        $category->save();
        return redirect(route('ChildToChildCategory.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = ChildToChildCategory::findOrFail($id);
        $category->delete();
        return back();
    }
}
